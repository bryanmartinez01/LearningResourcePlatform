

<?php defined ('BASEPATH') OR exit ('No direct script access allowed'); ?>

<div class = "container">



      <div class="profile-container text-center">
          <div>
            Hello, <?php echo $_SESSION ['username'];  ?>


          </div>
      </div>
  </div>




  <div align = "center" id = "container">
      <h3 class="search-title"> Search </h3>

      <div class="search-container">
      <div class="row upse">
        <div class = "col-sm-12">
          <form class = "form-inline" role = "form" action="<?php echo base_url().'Learning/search_title'; ?> " method= "post">
            <button type ="submit" class = "btn btn-info searchb" name = "submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button><input type = "text" class="form-control" id="searchf" name = "search" placeholder = "Search here...">
          </form>
        </div>
      </div>
      </div>

    <!--  <form class = "form-inline" role = "form" action="<?php// echo base_url().'Learning/search_title'; ?> " method= "post">
        <div class = "form-group">
            <input type = "text" class="form-control" name = "search" id = "firstname" placeholder = "Search here.">
        </div>
        <button type ="submit" class = "btn btn-info" name = "submit">Search </button>
      </form> <br/> -->


    <table style = "width: 85%;" class = "table table-striped">
      <thead style ="background-color: #3b5998; color: #fff; opacity: 0.9;" >
        <tr>
          <th><i class="fa fa-bookmark" id="upicon" aria-hidden="true"></i> Title</th>
          <th><i class="fa fa-graduation-cap" id="upicon" aria-hidden="true"></i> Course</th>
          <th><i class="fa fa-calendar" id="upicon" aria-hidden="true"></i> Date Uploaded</th>
          <th><i class="fa fa-tripadvisor" id="upicon" aria-hidden="true"></i> Adviser</th>
        </tr>
      </thead>
    <?php
      foreach ($ms as $projects ) {
       echo '<tr><td><a href="'.
       base_url('show_project?id='.
       $projects['proj_id']).
       '">'.
       $projects['title'].
       '</td><td>'.
       $projects['abbrev'].
       '</td><td>'.
       date('F d, Y (h:i A)', strtotime($projects['date_uploaded'])).
       '</td><td>'.
       $projects['professor'].
       '</td></tr>'
       ;
    }
    ?>
  </table>
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
                    <li class="drp"><a href="<?php echo base_url(); ?>user/profile"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</li>
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
