<?php
error_reporting(0);
include 'anticaptcha-php/anticaptcha.php';
include 'anticaptcha-php/recaptchaV2proxyless.php';
// include 'config.php';
define('API_CAPTPCHA', 'df3046ed937e00571e8efadec6222367');

class cell2gps
{
    private $siteurl;
    private $sitecaptchaKey;
    private $APIantiCaptcha;
    private $mcc;
    private $mnc;
    private $mobile_type;
    private $lac;
    private $cellid;
    private $sid;
    private $nid;
    private $bid;
    public function __construct(
        $mcc,
        $mnc,
        $mobile_type,
        $lac,
        $cellid,
        $sid = '',
        $nid = '',
        $bid = ''
    ) {
        // Query post
        $this->mcc = $mcc;
        $this->mnc = $mnc;
        $this->mobile_type =1;
        $this->lac = $lac;
        $this->cellid = $cellid;
        $this->sid = $sid;
        $this->nid = $nid;
        $this->bid = $bid;
        // Site Info
        $this->siteurl = 'http://www.cell2gps.com';
        $this->sitecaptchaKey = '6LfTc50aAAAAADi3VZPY5ntxMrcYEZbvGJOwSJkW';

        // API AntiCaptcha
        $this->APIantiCaptcha = API_CAPTPCHA;
    }
    public function solveCaptcha()
    {
        $api = new RecaptchaV2Proxyless();
        $api->setVerboseMode(true);
        $api->setKey($this->APIantiCaptcha);
        $api->setWebsiteURL($this->siteurl);
        $api->setWebsiteKey($this->sitecaptchaKey);
        if (!$api->createTask()) {
            $api->debout(
                'API v2 send failed - ' . $api->getErrorMessage(),
                'red'
            );
            return false;
        }
        $taskId = $api->getTaskId();
        if (!$api->waitForResult(300)) {
            echo "could not solve captcha\n";
            echo $api->getErrorMessage() . "\n";
            exit();
        } else {
            $gResponse = $api->getTaskSolution();
            return $gResponse;
        }
    }
    public function makeData()
    {
        $data = [
            'mcc' => $this->mcc,
            'mnc' => $this->mnc,
            'mobile_type' => $this->mobile_type,
            'lac' => $this->lac,
            'cellid' => $this->cellid,
            'sid' => $this->sid,
            'nid' => $this->nid,
            'bid' => $this->bid,
            'g-recaptcha-response' => $this->solveCaptcha(),
        ];
        return $data;
    }
    public function curl()
    {
        $ch = curl_init($this->siteurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->makeData());

        $result = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        if ($info['http_code'] == 302) {
            return $info['redirect_url'];
        } else {
            return $result;
        }
    }
    public function extractData($dataRes)
    {
        $to = strpos($dataRes, 'mapboxgl.accessToken =');
        $loc = strpos($dataRes, "map.on('load', function() {");
        if ($to) {
            $rpl = ['mapboxgl.accessToken', ' ', '=', "'"];
            $token = substr($dataRes, $to);
            $token = substr($token, 0, strpos($token, ';'));
            $token = str_replace($rpl, '', $token);
        }
        if ($loc) {
            $geo = substr($dataRes, $loc);
            $geo = substr($geo, 0, strpos($geo, ';'));
            $geo = substr($geo, strpos($geo, 'createPoint'));
            $ex = explode(',', $geo);
            $map = [
                'lat' => $ex[1],
                'lon' => $ex[2],
                'range' => $ex[3] . '  M',
            ];
            foreach ($map as $key => $val) {
                if (!$val) {
                    $map = null;
                    break;
                }
            }
        }
        $hasil = [
            'request' => $_GET,
            'token' => $token,
            'data' => $map,
            //'map' => $this->get_map($map),
        ];
        return $hasil;
    }
}

$defined_cli_opts = [
    'mcc:',
    'mnc:',
    'mobile_type:',
    'lac:',
    'cellid:',
    'sid:',
    'nid:',
    'bid:',
];
$args = getopt('', $defined_cli_opts);
if (count($args) < 1) {
    echo "Cell2GPS
    Usage :    
            --mcc <MCC>
            --mnc <MNC>
            --mobile_type 1 for GSM
                          2 for WCDMA
                          3 for CDMA
                          4 for TD-LTE
                          5 for FDD-LTE
                             
                          default is 1 for GSM
            --lac <LAC>
            --cellid <CELLID>
            --sid <SID> optional
            --nid <NID> optional
            --bid <BID> optional
    
    Example : php bot.php --mcc 310 --mnc 260 --mobile_type 1 --lac 328 --cellid 29021";
    exit();
}

$gps = new cell2gps(
    $_GET['mcc'],
    $_GET['mnc'],
    $_GET['mobile_type'],
    $_GET['lac'],
    $_GET['cid'],
    $args['sid'],
    $args['bid'],
    $args['nid']
);
$ResServer = $gps->curl();
$dataExtracted = $gps->extractData($ResServer);
if (!$dataExtracted['data']) {
    echo 'Invalid Data Params!';
    exit();
} else {
    $postData= array(
        'lat' => $dataExtracted['data']['lat'] ,
        'lon' => $dataExtracted['data']['lon'],
        'posisi' => "http://www.google.com/maps?q=".$dataExtracted['data']['lat']."".$dataExtracted['data']['lon'].""
    );
    
    echo json_encode($postData);
}
