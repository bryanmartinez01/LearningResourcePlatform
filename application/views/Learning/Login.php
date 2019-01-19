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
    <a class="navbar-brand" href="#top">LEARNING RESOURCE PLATFORM</a>
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
<div class="row in_homepage">

<div class="col-sm-6">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="bgin" src="<?php echo base_url(); ?>assets/images/browse.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block incarcap">
      <h3 class="logtitle"><i class="fa fa-search"></i> Browse Thesis</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bgin" src="<?php echo base_url(); ?>assets/images/upload.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block incarcap">
      <h3 class="logtitle"><i class="fa fa-upload"></i> Upload Projects</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bgin" src="<?php echo base_url(); ?>assets/images/export.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block incarcap">
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
<form method ="POST" action = "">



    <?php if(isset($_SESSION['Success'])){ ?>
      <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>

      <?php

    } ?>

    <div class="login-container">
      <div class="row logo-text">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 text-center"><img class="tlogo" src="<?php echo base_url(); ?>assets/images/logo.png"></div>
          <div class="col-sm-3"></div>
          <div class="col-sm-2"></div>
          <div class="col-sm-8 text-center"><p class="ttext">LEARNING RESOURCE PLATFORM</p></div>
          <div class="col-sm-2"></div>
      </div>

      <hr>
         
         <div class="lrp_textfield">
           <div class="row">
           <div class="col-sm-3"></div>
     			   <div class="col-sm-6 text-center">
     			        <form class="lrp_loginForm" action="" autocomplete="off" method="POST">
     					           <div class="input-group">
     						                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
     						                       <input type="text1" class="form-control" name="username" placeholder="Username">
     					           </div>
                         <?php echo form_error('username','<div class ="alert text-danger">', '</div>'); ?>

     					           <div class="input-group">
     						                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>
     						                       <input  type="password" class="form-control" name="password" placeholder="Password">
     					           </div>
                         <?php echo form_error('password','<div class ="alert text-danger">', '</div>'); ?>
     				      </form>
     			   </div>
           <div class="col-sm-3"></div>
         	</div>
        </div>

        <div class="lrp_container">
     		<div class="row lrp_row">
           <div class="col-sm-3"></div>
     			<div class="col-sm-6 text-center">
     				<label class="checkbox">
     					<input type="checkbox" value="remember-me"> Remember Me
     				</label>
            <button class="btn btn-lg btn-primary btn-block lrp_button" type="submit" name="login">Login</button>
     			</div>
          <div class="col-sm-3"></div>
        </div>

         <div class="row wor">
           <div class="col-sm-3"></div>
     			<div class="col-sm-6 text-center">
     					<a class="lrp_forgotPwd" href="#">Forgot your password?</a>
     			</div>
           <div class="col-sm-3"></div>
     		</div>

         <div class="row wor">
           <div class="col-sm-3"></div>
     			<div class="col-sm-6 text-center">
     					<span class="dhaa">Don't have an account? <a class="lrp_signup" href="<?= base_url('learning/register')?>"> Sign Up </a></span>
     			</div>
           <div class="col-sm-3"></div>
     		</div>
     	</div>
    </div>
  </div>

</form>
</div>
</div>




