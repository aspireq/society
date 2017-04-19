<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="icon" href="images/favicon.png" sizes="24X24" type="image/png">
      <title>Property2</title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
      <link href="css/csshake.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/ripples.min.css" rel="stylesheet">
      <link href="css/base.css" rel="stylesheet">
      <link href="css/animate.min.css" rel="stylesheet" media="all">
      <link href="css/sidebar.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
      <link href="css/bootstrap-submenu.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <script src="js/modernizr.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
    <div class="header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">LOGO</a>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="<?php if($currentPage =='index'){echo 'active';}?>"><a class="hvr-underline-from-center" href="index.php">Home</a></li>
              <li class="<?php if($currentPage =='whyus'){echo 'active';}?>"><a class="hvr-underline-from-center" href="whyus.php">Why Us</a></li>
              <li class="<?php if($currentPage =='price'){echo 'active';}?>"><a class="hvr-underline-from-center" href="price.php">Pricing</a></li>
              <li class="<?php if($currentPage =='buzzar'){echo 'active';}?>"><a class="hvr-underline-from-center" href="buzzar.php">Buzzar</a></li>
              <li class="<?php if($currentPage =='blog'){echo 'active';}?>"><a class="hvr-underline-from-center" href="blog.php">Blog</a></li>
              <li class="<?php if($currentPage =='career'){echo 'active';}?>"><a class="hvr-underline-from-center" href="career.php">Career</a></li>
              <li class="<?php if($currentPage =='contact'){echo 'active';}?>"><a class="hvr-underline-from-center" href="contact.php">Contact</a></li>
              <li><a data-toggle="modal" data-target="#signinmodal" class="btn btn-primary btn-raised">Sign In</a></li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li> -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
<!-- Modal -->
<div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="apartmentsignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content row">
      <div class="col-md-5 registerlinkblock" id="gradient">
        <img src="images/apartment.png" />
        <h4>Create Adda,It's Free!!</h4>
        <h4><a data-toggle="modal" href="#registermodal" data-dismiss="modal">Register Now</a></h4>
      </div>
      <div class="col-md-7 p-0">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="apartmentsignin">Sign In</h4>
        </div>
        <div class="modal-body">
         <form data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label class="control-label" for="email">Email / Username</label>
              <input class="form-control" id="email" type="email" data-error="Email address is invalid" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group label-floating">
              <label class="control-label" for="password">Password</label>
              <input class="form-control" id="password" type="password" data-minlength="6" data-error="Minimum of 6 characters" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group label-floating row m-10">
              <div class="checkbox col-md-6 m-0 p-0">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <div class="col-md-6 text-right p-0">
                <a href="" class="l-27">Forgot Password?</a>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-raised btn-info btn-block">Sign In <i class="fa fa-send"></i></button>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- register modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registerblock">
  <div class="modal-dialog" role="document">
    <div class="modal-content row">
      <div class="col-md-5 registerlinkblock" id="gr">
        <img src="images/apartment.png" />
        <h4>Already Adda Member ??</h4>
        <h4><a data-toggle="modal" href="#signinmodal" data-dismiss="modal">Login Now</a></h4>
      </div>
      <div class="col-md-7 p-0">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="registerblock">Sign Up</h4>
        </div>
        <div class="modal-body">
         <form class="registerform" data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label class="control-label" for="apartmentname">Apartment Name<sup>*</sup></label>
              <input class="form-control" id="apartmentname" type="text" data-error="Enter valid apartment name" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group label-floating">
              <label class="control-label" for="name">Your Name<sup>*</sup></label>
              <input class="form-control" id="name" type="text" data-error="Enter valid name" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group label-floating">
              <label class="control-label" for="email">Email<sup>*</sup></label>
              <input class="form-control" id="email" type="email" data-error="Enter valid phone email" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group label-floating">
              <label class="control-label" for="name">Phone Number<sup>*</sup></label>
              <input class="form-control" id="name" type="text" data-error="Enter valid phone number" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-raised btn-info btn-block">Sign Up <i class="fa fa-send"></i></button>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
