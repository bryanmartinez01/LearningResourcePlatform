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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/headerfooter.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/upload.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profile.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/help.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/shelpp.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/BootSideMenu.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap4.min.css'); ?>">


    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"> </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myjscript.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/BootSideMenu.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

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
