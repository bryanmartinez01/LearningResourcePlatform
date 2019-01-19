<?php echo form_open_multipart('Upload/do_upload');?>

<div class="upload-container">

  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center">
      <i class="fa fa-book" id="upicon" aria-hidden="true"></i>
      <input class="upload-project" type="text1" name="projtitle" placeholder="Title of the project/study.." required />
      <br />
      <i class="fa fa-file" id="upicon" aria-hidden="true"></i>
      <input class="upload-file" type="file" name="userfile" size="500" required />
      <br />
  <?php
    echo 'Category: ';
    $catlist = array(
      'Augmented/Virtual Reality Application' => 'Augmented/Virtual Reality Application',
      'Environmental Research' => 'Environmental Research',
      'Hardware-based Application' => 'Hardware-based Application',
      'Laboratory Research' => 'Laboratory Research',
      'Management Information System' => 'Management Information System',
      'Mobile Application' => 'Mobile Application',
      'Web Application' => 'Web Application',
    );
    echo form_dropdown('category', $catlist); ?>
      <!-- <input type="text" data-role="tagsinput" /> -->
      <!-- <br /> -->
<!-- palagyan ng style kasi di pa to responsive -->
      <textarea class="abstract" name="abstract" cols="50" rows="5" placeholder="Tell us something about the project.."></textarea>

        <div class="upload-dropdown"><?php
        echo '<i class="fa fa-graduation-cap" id="upicon" aria-hidden="true"></i>Course: ';
        $courselist = array();
        foreach ($getC as $course) {
          $courselist[$course['course_id']] = $course['abbrev']  ;
        }

        echo form_dropdown('course', $courselist); ?>
    <?php
      echo 'Year: ';
      $yearlist = array(
        '2018' => '2018', '2017' => '2017',
        '2016' => '2016', '2015' => '2015',
        '2014' => '2014', '2013' => '2013',
        '2012' => '2012', '2011' => '2011',
        '2010' => '2010', '2009' => '2009',
        '2008' => '2008', '2007' => '2007',
        '2006' => '2006', '2005' => '2005',
        '2004' => '2004', '2003' => '2003',
        '2002' => '2002', '2001' => '2001',
        '2000' => '2000', '1999' => '1999',
        '1998' => '1998', '1997' => '1997'
      );
      echo form_dropdown('year', $yearlist); ?>
    </div>
      <i class="fa fa-users" id="upicon" aria-hidden="true"></i>
      <input class="upload-project" type="text1" name="author" placeholder="Author/s (separated by comma if more than 1)" required>

      <br />
      <br />

      <div class="upload-dropdown"><?php
      echo '<i class="fa fa-tripadvisor" id="upicon" aria-hidden="true"></i> Adviser: ';
      $adviserlist = array();
      foreach ($getA as $adviser) {
        $adviserlist[$adviser['adv_id']] = $adviser['professor']  ;
      }

      echo form_dropdown('adviser', $adviserlist); ?>
    </div>
    <br/>
      <input class="btn btn-primary upload-button" data-toggle="modal" data-target="#myModal" type="submit" value="Upload" />
      <!-- Trigger the modal with a button -->

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <h3>CONVERTING! PLEASE WAIT...</h3>
        </div>

      </div>

  </div>
</div>
    </div>
    <div class="col-sm-3"></div>


  </div>
</div>

<div>
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
      </div>


<?php echo form_close(); ?>
