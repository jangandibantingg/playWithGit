<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$datetime=date('Y-m-d H:i:s');
$date=date('Y-m-d');
$jam=date('H:i"s');

if (isset($_GET['page'])) {
  $page=$_GET['page'];
  $action=$_GET['action'];
}

// config backend
$getUrl="http://127.0.0.1/progres/backend";
// sesion user/
$email = $_COOKIE['email'];

// fungtion post
function curl_data($url, $postField){
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, $url );
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($postField));
  // curl_setopt($ch,CURLOPT_COOKIEJAR, "cookie.txt");
  $response = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);

  return $response;
}

// fuction redirect
function result($result, $page){
  if ($result == 'success') {
    echo "data berhasil disimpan";
    echo " <meta http-equiv='refresh' content='0;url=./$page.aspx'>";
  }else {
    echo $result;
  }
}

// tanggal
function tanggal_indo($tanggal, $cetak_hari = false)
{
  $createDate = new DateTime($tanggal);
  $strip = $createDate->format('Y-m-d');

	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);

	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $strip);
  $tgl_indo = $split[2] . '/'.$split[1].'/'. $split[0];
	// $tgl_indo = $split[2] . '/'.$bulan[ (int)$split[1] ].'/'. $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($strip));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
