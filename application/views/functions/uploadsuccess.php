<?php include_once './application/uploaded/pdf2html/Converter.php' ?>

  <div id="container">
  	<div class="row">
  		<div class="col-sm-4"></div>
  		<div class="col-sm-4 text-center">
  		<h3>Converting and Uploading Sucess!</h3>
  		<a href="<?php echo base_url(); ?>Learning/browse"><button class ="btn btn-primary dashlink" name = "register"><i class="fa fa-search"></i> Browse Thesis</button></a></div>
  		<div class="col-sm-4"></div>
  	</div>
  </div>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-full navbar-s">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand aaa" href="<?php echo base_url(); ?>Learning/dashboard">LEARNING RESOURCE PLATFORM</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                <button class="dropdown-menu dropdown-style">
                    <li class="drp"><a href="<?php echo base_url(); ?>Learning/browse"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</li>
                    <li class="drp"><a href="<?php echo base_url(); ?>upload"><i class="fa fa-upload" aria-hidden="true"></i> UPLOAD</a></li>
                  </button>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/help"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Help</a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/about"><i class="fa fa-question-circle" aria-hidden="true"></i> About<span class="sr-only"></span></a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url('Learning/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log-out</a>
            </li>
        </ul>
        </div>
        </nav>
<!-- </a> -->
<!-- <p><?php// echo $file_name ?> was uploaded successfully!</p> -->
<?php
//  exec('php C:\wamp64\www\ci\uploads\pdf2html\Converter.php');
 //include './uploads/pdf2html/Converter.php' ?>
<!-- <a href="<?php //echo base_url('upload') ?>">Upload another</a> -->
<!--wala pang view-->
<!-- <a href="<?php //echo base_url('view_projects') ?>">View Projects</a> -->
