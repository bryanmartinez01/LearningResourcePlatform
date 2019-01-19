<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $mypage ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta http-equiv="no-cache">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/headerfooter.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/upload.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profile.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop-up.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/help.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/BootSideMenu.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-tagsinput.css'); ?>">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"> -->

    <!-- Bootstrap JS -->
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"> </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myjscript.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/BootSideMenu.js"> </script>
    <!-- <script src="<?php //echo base_url(); ?>assets/js/bootstrap-tagsinput-angular.js"> </script> -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <!-- <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> -->


    <script type="text/javascript">
      count = 0;
      counter = 0;
      currentID = "";
      del = "";

      function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;

            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
              "<html><head><title></title></head><body>" +
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
    </script>



  </head>

  <body>


    <header class="header main-header">

    <div class="header-container">
      <div class="col-md-12 col-sm-12 text-center">
        <img class="img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="TUP Logo" />
      </div>

      <div class="col-md-12 col-sm-12 text-center">
        <h2><span class="header-text">Learning Resource Platform</span></h2>
      </div>
    </div>
    <hr>

  </header>
