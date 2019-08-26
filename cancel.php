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

        .eg {
            padding: 50px;
            margin: 0px;
            background-color: #d9d9db;
        }

        h4 {
            color: inherit;
        }

        .bg {
            padding: 75px;
            margin-top: 10px;

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

        .pg {
            padding:15px;
            border: 4px solid #282e34;
            font-size: 12px;
            font-family: Arial Unicode MS;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;

            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            background-color: #282e34;
            color: white;


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
                    <li><a href="bus.php">HOME</a></li>
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
        <div class="row">
            <div class="col-sm-4">
                <h4>Cancel Ticket</h4>


                <form>
                    <div class="form-group">
                        <label style="font-size:14px;">Ticket Id:</span></label>
                        <input type="text" class="form-control" placeholder="Enter ticket Id">
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Contact Number: </label>
                        <input type="text" class="form-control" placeholder="Enter contact Number">
                    </div>

                    <button type="button" class="btn btn-primary" style="float:left;">Submit for cancel</button>
                    <br>
                    <br>
                    <br>
                    <br>


                    <div class="pg">
                        <p>1. In case you are unable to cancel your ticket online, please call 16374</p>
                        <P>2. Cancellation policies differ from operator to operator and is not set by Deshantor.com.</P>
                        <P>3. Please read our Cancellation and Refund policies before cancelling your ticket.</P>



                    </div>

                </form>

            </div>




            <div class="col-sm-8" style="border:1px solid #b8babc;padding:45px;">

                <i class="fa fa-info-circle" style="margin-left:370px;font-size:48px;color:red;"></i>
                <br>
                <br>
                <div style="color:grey;text-align:center;font-size:15px;">If you have a confirmed ticket booked through www.Deshantor.com, please enter your ticket PNR and the mobile number you used during ticket purchase.

<br>In case you have reserved a ticket thorugh bKash or opted for Cash on Delivery, and you want to cancel it, don't worry, it would be cancelled automatically due to non-receipt of payment.</div>
            </div>


        </div>

    </div>

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
