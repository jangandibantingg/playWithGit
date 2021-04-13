<?php
error_reporting(0);
// API URL
require_once '../../../control/module.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
  echo "<p class='text-center text-warning'>masukan data dengan lengkap</p>";

}else {


  $url = "$getUrl/webapp/engoncode/access/login";

  //Generate a random string.
  $token = openssl_random_pseudo_bytes(16);

  //Convert the binary data into hexadecimal representation.
  $token = bin2hex($token);

  //Print it out for example purposes.

  $email=$_POST['email'];
  $password=$_POST['password'];
  $dateNow=date('Y-m-d h:i:s');
  $ip = $_SERVER['REMOTE_ADDR'];
  // Create a new cURL resource
  $ch = curl_init($url);


  // Setup request to send json via POST
  $postField = array(
      'email' => $email,
      'password' => $password,
      'token' => $token,
      'exDate'   => $dateNow,
      'ip'       => $ip
  );

  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, $url );
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($postField));
  curl_setopt($ch,CURLOPT_COOKIEJAR, "cookie.txt");
  $response = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);

  // echo "$response";

  $data=json_decode($response);

  if ($data->status == 'login success' ) {

    setcookie('email', $data->email , time() + (86400 * 30), "/");
    setcookie("role", $data->role ,time() + (86400 * 30), "/");
    setcookie("token", $data->token ,time() + (86400 * 30), "/");
    echo " <meta http-equiv='refresh' content='0;url=./'>";

  }elseif(empty($ip) || empty($dateNow)){

    echo "<p class='text-center text-warning'>Ilegal Access</p>";

  }else{
    echo "<p class='text-center text-danger'>".$data->status."</p>";
  }

  if ($data->status == null) {
    echo "<p class='text-center text-danger'>check your internet connection</p>";

  }

}


 ?>
