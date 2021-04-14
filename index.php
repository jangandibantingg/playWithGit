<?php
session_start();
include 'control/module.php';
if (isset($_GET['page'])) {
  $page=$_GET['page'];
  $action=$_GET['action'];
}

if (empty($_COOKIE['email'])) {
  include 'library/content/login.php';
}else {
  include 'library/content/body.php';
}

 ?>
