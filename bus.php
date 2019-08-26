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

    .pimg0 {
        background-image: url("1.jpg");
        min-height: 100%;
    }

    .pimg1 {
        background-image: url("2.jpg");
        min-height: 100%;
    }

    .pimg2 {
        background-image: url("3.jpg");
        min-height: 100%;
    }

    .pimg3 {
        background-image: url("4.jpg");
        min-height: 100%;
    }

    .pimg0,
    .pimg1,
    .pimg2,
    .pimg3 {
        position: relative;
        opacity: 0.70;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .section {
        text-align: center;
        padding: 50px;
    }

    .section-light {
        background-color: #f4f4f4;
        color: #666;
    }

    .section-dark {
        background-color: #282e34;
        color: #ddd;
    }

    .ptext {
        position: absolute;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
        font-size: 27px;
        letter-spacing: 8px;
        text-transform: uppercase;
    }

    .ptext,
    .border {
        color: #f7f7f7;
        apdding: 20px;
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

        margin: 0px;
    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }

    .ag {
        background-image: url("cover1.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
        min-height: 100%;
    }

    .bg {
        background-color: #282e34;
        height: 100px;
        width: 1350px;
        padding: 10px;
        background-size: cover;
        font-size: 17px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-top: -30px;
        text-align: center;
        


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

    .dg {
        background-color: #2d2d30;
    }

    .eg {
        padding: 50px;
        margin: 0px;
        background-color: #d9d9db;
    }

    .fg {
        background-color: #282e34;
        padding: 20px;

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


   @media(max-width:568px) {
    .pimg1,
    .pimg2,
    .pimg3,
    .bg {
        background-attachment: scroll;
    }
}
</style>

</head>

<body>
    <!--navigation-->

    <nav class="navbar navbar-defalut navbar-fixed-top">
        <div class="container-fluid">
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
    <div class="jumbotron jumbotron-fluid ag">
        <div class="container">
            <h1 style="color:white;">WELCOME TO THE DESHANTOR.COM</h1>
            <p style="color:white;">“A journey is best measured in friends, rather than miles.” – Tim Cahill</p>
            <br>
            <br>
            <br>



            <div class="container">

                <form>
                    <div class="form-group row">
                        <div class="col-xs-2">
                            <label style="color:#eaeaea;" for="from">From:</label>
                            <input class="form-control" placeholder="Enter a City" type="text">
                        </div>
                        <span class="switchButton" id="switchButton"></span>

                        <div class="col-xs-2">
                            <label style="color:#eaeaea;" for="from">To:</label>
                            <input class="form-control" placeholder="Enter a City" type="text" style="margin-left:-10px;">
                        </div>
                        <div class="col-xs-2">
                            <label style="color:#eaeaea;" for="from">Date of Journey:</label>
                            <input class="form-control" type="date" style="margin-left:-10px;">
                        </div>
                        <div class="col-xs-3">
                            <label style="color:#eaeaea;" for="from">Date of Return(optional):</label>
                            <input class="form-control" type="date" style="margin-left:-10px;">
                        </div>
                        <button class="btn"><span class="glyphicon glyphicon-search"></span> Search</button>



                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="contianer-fluid"></div>

    <div class="container bg">
        <h1 style="color:#fff;">POPULAR BUS ROUTES</h1>

    </div>
    <div class="pimg0">
        <div class="ptext">
            <span class="border">
                DHAKA
            </span>

        </div>
    </div>
    <section class="section section section-dark">
        <p>Dhaka (or Dacca) is the capital and largest city of Bangladesh. It is the cultural and economic hub of the country. Having a colossal historical background, the old part of the city, known as Old Dhaka or Old Town, is home to a broad range of
            architectural heritage starting from the vestiges of the Mughal Empire to the British Colonial buildings. Being the centre of the independence movements of Bangladesh, Dhaka also hosts some significant national monuments and structures. There
            are a number of annual cultural events held in Dhaka like Pohela Falgun, Pohela Baishakh and Ekushe Book Fair which add a unique flavour to the city.

        </p>
    </section>



    <div class="pimg1">
        <div class="ptext">
            <span class="border">
                COXBAZAR
            </span>

        </div>
    </div>
    <section class="section section section-dark">
        <p>Cox's Bazar is the prime beach and tourist town in Bangladesh, situated alongside the beach of the Bay of Bengal, beside the Indian ocean, having unbroken 120 Kilometer golden sand beach, reachable through motor transport alongside the wavy water
        . This town is situated in the Chittagong Division in south-eastern Bangladesh, beside 'Myanmar (Burma)'</p>
    </section>

    <div class="pimg2">
        <div class="ptext">
            <span class="border ">
                SYLHET
            </span>

        </div>
    </div>
    <section class="section section section-dark">
        <p>Nestled in the picturesque Surma Valley amidst scenic tea plantations and lush green tropical forests, greater Sylhet is a prime attraction for all tourists visiting Bangladesh. Sylhet has developed due to remittances from the expatriates living
            in Britain and America. Laying between the Khasia and the Jaintia hills on the north, and the Tripura hills on the south, Sylhet breaks the monotony of the flatness of this land by a multitude of terraced tea gardens, rolling countryside and
        the exotic flora and fauna. Here the thick tropical forests abound with many species of wildlife, spread their aroma around the typical hearth and homes of the Monipuri Tribal maidens famous for their dance.</p>
    </section>
    <div class="pimg3">
        <div class="ptext">
            <span class="border ">
                CHITTAGONG
            </span>

        </div>
    </div>
    <section class="section section section-dark">
        <p>Chittagong is a fairly big, spread out town, and the largest international seaport in the country. Like Dhaka, the streets are filled with masses of rickshaws, though the city puts in a little more effort to keep its streets and sidewalks clean.
            Foreigners will notice a distinct increase in nuisances from beggars in certain intersections: for example, New Market Circle and the central Railway Station. The majority of the beggars are from other parts of the country such as Greater
        Mymensingh Region and Greater Noakhali area. They have migrated due to the fact that Chittagonian people are more prone to charity relative to other parts of the country.</p>
    </section>
    <div class="container-fluid ">
        <h2 style="text-align: center;color:#424c37;padding:35px;">BUY BUS TICKETS IN EASY 3 STEPS</h2>
        <div class="row dg">
            <div class=col-sm-4>
                <i class="fa fa-search" style="font-size:48px;color:grey;padding:15px;margin-left:55px;"></i>
                <div class="col-sm-2">
                    <br>
                    <br>
                    <h3 style="margin-left:100px;color:grey;">SEARCH</h3>



                </div>

            </div>
            <div class=col-sm-4>
                <i class="fa fa-bus" style="font-size:48px;color:grey;padding:15px;margin-left:50px;"></i>
                <div class="col-sm-2">
                    <br>
                    <br>
                    <h3 style="margin-left:95px;color:grey;">SELECT</h3>
                </div>
            </div>
            <div class=col-sm-4>
                <i class="fa fa-money" style="font-size:68px;color:grey;padding:15px;margin-left:50px;"></i>
                <div class="col-sm-2">
                    <br>
                    <br>
                    <h3 style="margin-left:130px;color:grey;">PAY</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fg">
        <div class="row">
            <div class="col-sm-6 ">
                <h4 style="color:grey;padding:20px;margin-left:20px;background-color:white;"><i class="fa fa-lock fa-1x" style="color:Green;"></i> SAFE & SECURE ONLINE PAYMENTS</h4>

            </div>
            <div class="col-sm-6 ">
                <h4 style="color:grey;padding:20px;margin-left:20px;background-color:white;"><i class="fa fa-home fa-1x"style="color:Green;"></i> Cash on Delivery available</h4>

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
