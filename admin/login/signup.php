<?php
session_start();
include("config.php");


$name = $gender = $birth = $email = $pwd = "";

$err1 = "";
$err2 = "";
$err3 = "";
$flag = false;

if (isset($_POST["submit"])) {
    if (!empty($_POST["user_name"]) && $_POST["user_email"] && $_POST["user_password"]) {

        if (!preg_match("/^[a-zA-Z .]{2,20}$/", $_POST["user_name"])) {
            $err1 .= "You must put character <br/>";
            $flag = true;
        }

        if (!preg_match("/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/", $_POST["user_email"])) {
            $err2 .= "Please type a valid Email address.<br/>";
            $flag = true;
        }
        if (!preg_match("/^[A-Za-z0-9]{6,}$/", $_POST["user_password"])) {
            $err3 .= "Only letters and number allowed.(min 6 digits).<br/>";
            $flag = true;
        }

        if ($flag == false) {
            $name = $_POST["user_name"];
            //$gender = $_POST["user_gender"];
            //$birth = $_POST["user_birth_day"];
            $email = $_POST["user_email"];
            $pwd = md5($_POST["user_password"]);

            $sql = "INSERT INTO users(user_name,user_email,user_password)VALUES('$name','$email','$pwd')";
            if (mysqli_query($con, $sql)) {
                //echo "<script>window.location='login.php'</script>";
                echo "Congrats!!! you can Login now";
                header('location:http://localhost/blog/index.php?s=s');
            } else {
                echo "Error" . mysqli_error($con);
            }
        }

    } else
    {
        if ($_POST["user_name"]=="") {
            $err1.= "First name is required. <br/>";

        }

        if($_POST["user_email"]==""){
            $err2.="Please type a valid Email address.<br/>";

        }
        if($_POST["user_password"]==""){
            $err3.="Only letters and number allowed.(min 6 digits).<br/>";

        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penta Core - SignUp</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/styleSignUp.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include_once'../../common/headerMenu.php';?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../../img/vietnam-war-background_2.jpg')">
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Sign Up</h1>
                        <hr class="small">
<!--                        <span class="subheading">Have questions? I have answers (maybe).</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="span8" id="maincontent">
                    <!--<p>Want to get in touch with us? Fill out the form below to send us a message and we will try to get back to you!</p>-->
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                    <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                    <form id="registration-form" class="form-horizontal" method="post" action="">

                        <h1>Registration form</h1>
                        <br/>

                        <div class="form-control-group">
                            <label class="control-label" for="name">Your Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="user_name" id="name">
                            </div>
                        </div>

                        <!--<div class="form-control-group">
                            <label class="control-label" for="name">User Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="username" id="username">
                            </div>
                        </div>-->

                        <div class="form-control-group">
                            <label class="control-label" for="name">Password</label>
                            <div class="controls">
                                <input type="password" class="input-xlarge" name="user_password" id="password">
                            </div>
                        </div>

                        <div class="form-control-group">
                            <label class="control-label" for="name"> Retype Password</label>
                            <div class="controls">
                                <input type="password" class="input-xlarge" name="confirm_password" id="confirm_password">
                            </div>
                        </div>

                        <div class="form-control-group">
                            <label class="control-label" for="email">Email Address</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="user_email" id="email">
                            </div>
                        </div>
                        <div class="form-control-group">
                            <label class="control-label" for="message">Your Address</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="address" id="address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-control-group">
                            <label class="control-label" for="message"> Please agree to our policy</label>
                            <div class="controls">
                                <input id="agree" class="checkbox" type="checkbox" name="agree">
                            </div>
                        </div>

                        <div class="form-actions">
                            <input type="submit" class="btn btn-success btn-large" value="Register" name="submit">
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Pentacore Blogsite 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
<!--    <script src="../../js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../js/clean-blog.min.js"></script>

    <script src="assets/js/jquery-1.7.1.min.js"></script>

    <script src="assets/js/jquery.validate.js"></script>

    <script src="script.js"></script>
    <script>
        addEventListener('load', prettyPrint, false);
        $(document).ready(function(){
            $('pre').addClass('prettyprint linenums');
        });
    </script>

</body>

</html>
