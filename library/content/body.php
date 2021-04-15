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


<!-- Add New Task -->
<div class="modal fade" id="addtask" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Task</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Task no.">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <select class="form-control show-tick">
                                <option>Select Team</option>
                                <option>John Smith</option>
                                <option>Claire Peters</option>
                                <option>Allen Collins</option>
                                <option>Cory Carter</option>
                                <option>Rochelle Barton</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label>Range</label>
                        <div class="input-daterange input-group" data-provide="datepicker">
                            <input type="text" class="form-control" name="start">
                            <span class="input-group-addon"> to </span>
                            <input type="text" class="form-control" name="end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--  -->
</div>
<?php include 'library/content/script.php'; ?>
<!-- Scripts -->
</body>
</html>
