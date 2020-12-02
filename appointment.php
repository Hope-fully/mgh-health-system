<!DOCTYPE html>
<head>
	<title>Home</title>
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
        <li><a href="register.php" class="page-scroll">Register</a></li>
        <li><a href="login.php" class="page-scroll">Login</a></li>
        <li><a href="about.php" class="page-scroll">About Hospital</a></li>
        <li><a href="covid.php">Covid-19 info</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>



<div class="header">
		<h2>Make Appointment</h2>
	</div>
    <br>
    <!--
    <form class="form-horizontal" method="post" action="booking.php">
        <?php include('errors.php'); ?>
                <div class="form-group">
			<label>Date</label>
                        <input type="date" name="date">
		</div>
                <div class="input-group111">
			<label>Appointment Time</label>
                        <select name="b_time">
                            <option>09:00</option>
                            <option>09:30</option> 
                            <option>10:00</option> 
                            <option>10:30</option> 
                            <option>11:00</option> 
                            <option>11:30</option> 
                            <option>12:00</option>
                            <option>12:30</option>
                            <option>14:00</option>
                            <option>14:30</option>
                            <option>15:00</option>
                            <option>15:30</option>
                            <option>16:00</option>
                            <option>16:30</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>18:30</option>
                            
                        
                            
                        </select>
		</div>
    
                <div class="input-group">
			<label>ID number</label>
			<input type="text" name="id_num">
		</div>
                 <div class="input-group">
			<label>Name</label>
                        <input type="text" name="name" placeholder="e.g John">
		</div>
                <div class="input-group">
			<label>Surname</label>
			<input type="text" name="sname" placeholder="e.g Smith">
		</div>
                <div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact" placeholder="e.g 0794351177">
		</div>
                <div class="input-group">
			<label>Purpose</label>
                        <input type="text" name="purpose" placeholder="e.g Consult/Check up/Collect Medication">
		</div>
                <div class="input-group">
                    <button type="submit" class="btn" name="create_appointment">Create Appointment</button>
		</div>
                 <script>alert'("Successfully submitted")';</script>
        
        </form> -->

         <form class="form-horizontal" style="padding-top: 200px; width: 50%">


            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Names</label>
                <div class="col-sm-10">
                <input type="name" class="form-control" id="inputName" placeholder="Enter name and surname  here">
                </div>
            </div>
            <div class="form-group">
                <label for="inputIDnumber" class="col-sm-2 control-label">ID Number</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="inputIDnumber" placeholder="Enter your identity number">
                </div>
            </div>
            <div class="form-group">
                <label for="inputMobile" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="inputMobile" placeholder="Enter your phone number here">
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

            <div class="form-group">
                <label for="inputTime" class="col-sm-2 control-label">Doctor</label>
                <div class="col-sm-10">
                        <select name="b_doctor">
                            <option>General Doctor</option>
                            <option>Optemetrist</option> 
                            <option>Gynocologist</option> 
                            <option>Dentist</option> 
                            <option>Orthopaedist</option>  
                        </select>
                    </div>
            </div>


            <div class="form-group">
                <label for="inputTime" class="col-sm-2 control-label">Appointment Time</label>
                <div class="col-sm-10">
                        <select name="b_time">
                            <option>09:00</option>
                            <option>09:30</option> 
                            <option>10:00</option> 
                            <option>10:30</option> 
                            <option>11:00</option> 
                            <option>11:30</option> 
                            <option>12:00</option>
                            <option>12:30</option>
                            <option>14:00</option>
                            <option>14:30</option>
                            <option>15:00</option>
                            <option>15:30</option>
                            <option>16:00</option>
                            <option>16:30</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>18:30</option>   
                        </select>
                    </div>
            </div>

            <div class="form-group">
			<label for="inputName" class="col-sm-2 control-label" >Date</label>
                        <input type="date" name="date">
		</div>



           

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Book</button>
                </div>
            </div>
            </form>


       
</body>
</html>