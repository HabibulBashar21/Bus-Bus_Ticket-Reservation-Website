<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DESHANTOR</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .error {color: #FF0000;}
    body,
    html {
        height: 80%;

        margin: 0;
        font-size: 16px;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        line-height: 1.8em;

    }

    .navbar {
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;

    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
        color: #939496 !important;
    }

    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 20px;
        font-family: Arial;
        letter-spacing: 3px;


    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }
     .btn {
        background-color: #6d756a;

        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 15px 5px;
        opacity: 1;
        transition: 0.3s;
    }

        .btn-primary:hover {
            transform: scale(1.2);

        }

    .bg {
        padding: 50px;
        margin-top: 100px;
        margin-bottom: 200px;
        background-color: #e2e2e2;

        margin-left: 20px;
        margin-right: 20px;
    }

    .eg {
        padding: 50px;
        margin: 0px;
        background-color: #d9d9db;
    }

    input[type=text]:focus {
        border: 2px solid #555;
    }

    .btn-primary:hover {
        transform: scale(1.2);

    }
      .dropdown-menu{
             background-color: #282e34;
             height: 150px;
             width:400px;
             padding:25px;
             float: justify;
             color: white;


        }
        .dropdown{
             position: absolute;
  
        }



}
</style>
</head>

<body>
  <?php
  $ocErr=$dcErr=$pbErr=$cpnErr=$emailErr=$comnErr=$dojErr=$mnErr="";
  $oc=$dc=$pb=$cpn=$email=$comn=$doj=$mn="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["oc"])) {
        $ocErr = "*Origin City Name is required";
    } 
    else {
        $oc = test_input($_POST["oc"]);
    // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$oc)) {
          $ocErr = "Only letters and white space allowed"; 
      }
  }


  if (empty($_POST["dc"])) {
    $dcErr = "*Destination City Name is required";
} 
else {
    $dc = test_input($_POST["dc"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dc)) {
      $dcErr = "Only letters and white space allowed"; 
  }
}

if(empty($_POST["email"])) {
    $emailErr = "*Email is required";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
  }
}

if (empty($_POST["cpn"])) {
    $cpnErr = "*Contact person Name is required";
} 
else {
    $cpn = test_input($_POST["cpn"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$cpn)) {
      $cpnErr = "Only letters and white space allowed"; 
  }
}

if(empty($_POST["mn"])) {
    $mnErr = "*Number is required";
} else {
    $mn = test_input($_POST["mn"]);
    // check if mobile number is well-formed
    if (!preg_match("/^[0-9]*$/",$mn)) {
      $mnErr = "*Invalid mobile Number, Only number is allowed"; 
  }
}


if (empty($_POST["cn"])) {

} 
else {
    $cpn = test_input($_POST["cpn"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$cn)) {
      $cnErr = "Only letters and white space allowed"; 
  }
}





}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	
	
	
    <nav class="navbar navbar-defalut navbar-fixed-top">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-family:Berlin Sans FB Demi" href="bus.php">DESHANTOR.COM</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
     </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class=" nav navbar-nav navbar-right">
                    <li><a href="bus.php">MY ACCOUNT</a></li>
                    <li><a href="bkash.php">VERIFY BKASH</a></li>
                    <li><a href="cancel.php">CANCEL TICKET</a></li>
                    <li><a href="reg.php">BUS RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                   <li class="dropdown"><a href="#" class="dropdown-toogle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="font-size: 10px;"></span>LOGIN/SIGN-UP</a>

                        <ul class="dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2"> 
                                        <li><a href="login.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                                    </div>
                                    <div class="col-sm-2">
                                        <li><a href="signup.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>SIGN-UP</a></li>

                                    </div>

                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <div class="container-fluid bg">
        <p style="font-size:12px;">NB:All (<span class="glyphicon glyphicon-star"></span>)marks are required field.</p>
        <h4><strong>Journey Details</strong></h4>
        <hr style="border-color:#8d9093;">
        <div class="row">
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Date of journey: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="date" class="form-control" placeholder="pick a date" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Origin City ( with Boarding Point ): <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" name="oc" class="form-control" placeholder="" value="<?php echo $oc;?>">
						 <span class="error"> <?php echo $ocErr;?></span>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Number of seats in the bus: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="number" class="form-control" name="number" min="1" max="40" placeholder="select between 1 to 40" required>
                           
                       
                    </div>
                


            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Date of Return: </label>
                        <input type="date" class="form-control" placeholder="pick a date">
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Destination City ( with dropping Point ): <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" name="dc" class="form-control" placeholder="" value="<?php echo $dc;?>">
						<span class="error"> <?php echo $dcErr;?></span>
                    </div>
                   
               

            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Bus type </label>
                        <select class="form-control"  >
                           <option>Default (NON AC)</option>
                           <option>AC</option>
                           <option>Non AC</option>
                           <option>AC Business Class</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Prefered bus operator(if any): </label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                
            </div>
        </div>
        <br>
        <br>
        <h4><strong>Contact Details</strong></h4>
        <hr style="border-color:#8d9093;">

        <div class="row">
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Contact person name: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" name="cpn" class="form-control" placeholder="" value="<?php echo $cpn;?>">
						<span class="error"> <?php echo $cpnErr;?></span>
                    </div>
                    


                

            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Mobile No: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" name="mn" maxlength="11"class="form-control" placeholder="" value="<?php echo $mn;?>">
						<span class="error"> <?php echo $mnErr;?></span>
                    </div>
                    



               

            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label for="email">Email:<span class="glyphicon glyphicon-star" </span> </label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>">
						 <span class="error"> <?php echo $emailErr;?></span>
                    </div>
                

            </div>


        </div>
        <button type="submit" name ="submit" class="btn btn-primary" style="float:right;">Submit Reservation Request</button>
		 
     
		 
    </div>

</form>

    <div class="container-fluid eg">
        <div class="row">
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Router</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Dhaka To Chittagong (Vise Versa)</li>
                    <li>Dhaka To Cox Bazar (Vise Varsa)</li>
                    <li>Dhaka To Sylhet (Vise Versa)</li>
                    <li>Dhaka To Rajshahi (Vise Versa)</li>
                    <li>Dhaka To Bogra (Vise Versa)</li>
                    <li>Dhaka To Kushtia (Vise Versa)</li>
                    <li>Dhaka To Feni (Vise Versa)</li>
                    <li>Dhaka To Noakhali(Vise Versa)</li>
                    <li>Dhaka To Rangpur (Vise Versa)</li>
                    <li>Dhaka To Khulna (Vise Versa)</li>
                    <li>Dhaka To Panchagar(Vise Versa)</li>
                    <li>Dhaka To Rangamati (Vise Versa)</li>
                    <li>Dhaka To Comilla (Vise Versa)</li>

                </ul>
            </div>
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Operators</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Green Line Paribahan</li>
                    <li>Shyamoli paribahan</li>
                    <li>Dipjol Enterprise</li>
                    <li>Hanif Enterprise</li>
                    <li>Royal Coach</li>
                    <li>Saint Martin Hyundai</li>
                    <li>Star Line Special Limited</li>


            </div>


        </div>
    </div>


    <!--footer-->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
        <p style="font-size:10px;">Copyright © 2018 DESHANTOR.COM All Rights Reserved</p>
    </footer>
	 
	
</body>

</html>
