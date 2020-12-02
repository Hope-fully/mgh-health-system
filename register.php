<!DOCTYPE html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interact</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.php">Moloto General Hospital</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" class="page-scroll">Login</a></li>
        <li><a href="about.php" class="page-scroll">About MGH</a></li>
        <li><a href="covid.php" class="page-scroll">Covid-19 info</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>



<body>

<form method="post" action="register.php" class="form-horizontal" style="padding-top: 200px; width: 50%">

  <?php include('errors.php'); ?>

    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label" >Name</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="inputName" placeholder="Enter name and surname  here" name="name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputIDnumber" class="col-sm-2 control-label" name="idNum">ID Number</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" id="inputIDnumber" placeholder="Enter your identity number">
        </div>
      </div>
      <div class="form-group">
        <label for="inputMobile" class="col-sm-2 control-label" >Phone Number</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputMobile" placeholder="Enter your phone number here" name="phoneNum">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <input type="address" class="form-control" id="inputAddress" placeholder="Enter your address here" name="address">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label"  >Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" value="<?php echo $email; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password1" >
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password2">
        </div>
      </div>

      <div class="form-group">
                    <label for="inputGender" class="col-sm-2 control-label">Gender:</label>
                      <div class="col-sm-10">
                          <select name="gender" id="gender">
                              <option value="volvo">Male</option>
                              <option value="saab">Female</option>
                          </select>
                      </div>
                    </div>

                
                </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="reg_user">Send Registration</button>
        </div>
      </div>
</form>



</body>
</html>