<?php defined ('BASEPATH') OR exit ('No direct script access allowed'); ?>

<?php if(isset($_SESSION['Success'])){ ?>
      <div class ="fo alert alert-success text-center"> <?php echo $_SESSION ['Success']; ?> </div>
        <?php
      } ?>

      <!-- try lang ng effects, pero ganito sana para maangas, pero dapat nakalutang lang sya -->
      <script type="text/javascript">
        $(document).ready(function () {
        $(".fo").fadeOut(2200);
        });
      </script>

<div align="center" class="dashcont" id="dashcont">
	<div class="row">
		<div class="col-sm-6 text-center border">
			<a class="dashimg" href="<?php echo base_url(); ?>learning/browse"><img class="imdash" src="<?php echo base_url(); ?>assets/images/browse.jpg" alt="browse"></a>
            <a href="<?php echo base_url(); ?>learning/browse"><button class ="btn btn-primary dashlink" name = "register"><i class="fa fa-search"></i> Browse Thesis </button></a>
                <p class="dashti1 text-center">Browse different thesis of your like and search for related topics.</p>
		</div>
		<div class="col-sm-6 text-center border">
			<a class="dashimg" href="<?php echo base_url(); ?>upload"><img class="imdash" src="<?php echo base_url(); ?>assets/images/upload.jpg" alt="browse"></a>
            <a href="<?php echo base_url(); ?>upload"><button class ="btn btn-primary dashlink" name = "register"><i class="fa fa-upload"></i> Upload Projects </button></a>
                <p class="dashti1 text-center">Upload your own project and become a contributor of our website.</p>
		</div>
		<div class="col-sm-12 text-center border">


		<!--	<?php
        // foreach ($files as $study) {
        //   echo '<p><strong>'.
        //   $study['title'].
        //   '</strong></p><embed src="'.
        //   $study['path'].
        //   '" type="application/pdf" width="400" height="600"</embed>';
        // }
       ?>
		</div>-->
	</div>
</div>

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-full navbar-s">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand aaa" href="#top">LEARNING RESOURCE PLATFORM</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="dropdown">
                <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                <button class="dropdown-menu dropdown-style">
                    <li class="drp"><a href="<?php echo base_url(); ?>learning/browse"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</li>
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
</div>
