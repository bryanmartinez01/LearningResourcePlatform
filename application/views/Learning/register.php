
<?php


if (isset($_SESSION['username'])){
    echo ('punyeta');
		redirect('user/profile');
	}
  ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark navbar-full navbar-s">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url(); ?>Learning">LEARNING RESOURCE PLATFORM</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/loghelp"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Help</a>
            </li>

            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/logabout"><i class="fa fa-question-circle" aria-hidden="true"></i> About<span class="sr-only"></span></a>
            </li>
        </ul>
        </div>
    </nav>
    </header>  

<div class="row reghomepage">
<div class="col-sm-6">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="bgreg" src="<?php echo base_url(); ?>assets/images/browse.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block regcarcap">
      <h3 class="logtitle"><i class="fa fa-search"></i> Browse Thesis</h3>
      
      </div>
    </div>
    <div class="carousel-item">
      <img class="bgreg" src="<?php echo base_url(); ?>assets/images/upload.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block regcarcap">
      <h3 class="logtitle"><i class="fa fa-upload"></i> Upload Projects</h3>
      
      </div>
    </div>
    <div class="carousel-item">
      <img class="bgreg" src="<?php echo base_url(); ?>assets/images/export.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block regcarcap">
      <h3 class="logtitle"><i class="fa fa-print"></i> Export Projects</h3>
      
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-sm-6">

<form method="post" action="<?php echo base_url('Learning/register'); ?>">


    <div class="register-container">
      <div class="row logo-text">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 text-center"><img class="tlogo1" src="<?php echo base_url(); ?>assets/images/logo.png"></div>
          <div class="col-sm-3"></div>
          <div class="col-sm-2"></div>
          <div class="col-sm-8 text-center"><p class="ttext">LEARNING RESOURCE PLATFORM</p></div>
          <div class="col-sm-2"></div>
      </div>
      <hr>

      <div class="row register">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
      <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon1"><i class="fa fa-user"></i></span>
          <input class="form-control" type="text1" id = "username" name = "username" placeholder="Username">
          </div>
          <?php echo form_error('username','<div class ="alert text-danger">', '</div>'); ?>
      </div>

      <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon1"><i class="fa fa-envelope"></i></span>
          <input class="form-control" type="text1" id = "email" name = "email" placeholder="Email">
          </div>
          <?php echo form_error('email','<div class ="alert text-danger">', '</div>'); ?>
      </div>

      <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon1"><i class="fa fa-lock"></i></span>
          <input class="form-control" type="password" id = "password" name = "password" placeholder="Password">
          </div>
          <?php echo form_error('password','<div class ="alert text-danger">', '</div>'); ?>
      </div>

      <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon1"><i class="fa fa-lock"></i></span>
          <input class="form-control" type="password" id = "password" name = "password2" placeholder="Confirm Password">
          </div>
          <?php echo form_error('password','<div class ="alert text-danger">', '</div>'); ?>
      </div>

      <div class = "text-center">
          <button class ="btn btn-primary register-button" name = "register"> Register </button>
      </div>
    </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row wor">
      <div class="col-sm-3"></div>
     <div class="col-sm-6 text-center">
         <span class="dhaa">Already have an account? <a class="lrp_signup" href="<?= base_url('learning')?>"> Sign In </a></span>
     </div>
      <div class="col-sm-3"></div>
   </div>

    </div>
  </div>
</div>

</form>
</div>
