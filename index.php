<?php
session_start();
if (isset($_GET['page'])) {
  $page=$_GET['page'];
}

if (empty($_COOKIE['email'])) {
  include 'library/content/login.php';
}else {
  include 'library/content/body.php';
}

 ?>
