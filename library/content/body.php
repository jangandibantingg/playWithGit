<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body class="font-opensans">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <?php
    include 'library/content/header_top.php';
    include 'library/content/rightsidebar.php';
    include 'library/content/userid.php';
    include 'library/content/left-sidebar.php';


    ?>



<div class="page">
  <?php
  include 'library/content/page_top.php';
  if(empty($_GET['page'])){
    include 'view/beranda.php';
  }else {
    include "view/module/$_GET[page]/index.php";
  }
  ?>




</div>
</div>



<!--  -->
</div>
<?php include 'library/content/script.php'; ?>
<!-- Scripts -->
</body>
</html>
