<?php

include '../../../control/module.php';

if (isset($_POST)) {
$required = array('name', 'text');
// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if ($_POST[$field] == '' ) {
    $null .=$field;
    $error = true;

  }
}

if ($error) {
  echo "<code> Masukan Data Dengan Lengkap   </code>";
} else {

$postField= array(
  'name'  => $_POST['name'],
  'text'  => $_POST['text'],
  'link'  => $_POST['link'],
  'data'  => $_POST['data'],
  'id'    => $_POST['id'],
  'email' => $email,

);
$url="$getUrl/webapp/engoncode/app/$_POST[data]/post";

$data=json_decode(curl_data($url, $postField));
$result=result($data->result, $_POST['data']);
var_dump($data);

}
}
 ?>
