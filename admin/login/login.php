<?php

session_start();
include("config.php");


if (isset($_COOKIE['user_name'])) {
    $_SESSION["user_name"] = $_COOKIE['user_name'];
    echo "<script>window.location='../insertArticle.php'</script>";
}


if (isset($_POST["submit"])) {
    $email = ($_POST["user_email"]);
    $pwd = md5($_POST["user_password"]);
    //$remember=($_POST["remember"]);

    $sql = "select * from users where user_email='" . $email . "' and   user_password='" . $pwd . "'";

    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows) {
        while ($row = mysqli_fetch_array($result)) {
            if (isset($row[0])) {
                $_SESSION["user_id"] = $row[0];
                $_SESSION["user_name"] = $row[1];
                $_SESSION["email"] = $_POST["user_email"];

                if (isset($_POST['rememberMe']) &&
                    $_POST['rememberMe'] == 'Yes'
                ) {
                    setcookie("user_name", $_SESSION["user_name"], time() + 172800); //2 days value in sec
                }
                //header('Location: user.php');

                echo "<script>window.location='../insertArticle.php'</script>";
            }

        }
    } else {
        echo "Invalid Id or password!!!Please try again.";
    }


}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
<div class="row" style="background-color:#8DD3B9; margin-top:10px">
    <div class="col-md-12" style=" ">

        <ul class="nav nav-pills">
            <li class="active"><a href="http://localhost/blog">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</div>
<form action="#" class="login" method="post">
    <h1>Please Login</h1>
    <input type="email" name="user_email" class="login-input" placeholder="Email Address" autofocus>
    <input type="password" name="user_password" class="login-input" placeholder="Password">
    Do you need to Remember?
    <input type="checkbox" name="rememberMe" value="Yes"/> <br/>
    <input type="submit" value="Login" name="submit" class="login-submit">
    <a href="signup.php" class="login-submit">SignUp</a>
    <a href="../../index.php" class="login-submit">Back to Home </a>
</form>
</body>
</html>







