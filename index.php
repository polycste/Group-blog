<?php
    //include_once'connection.php';
    include_once'admin/dbClass.php';
    include_once'frontend.php';




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penta Core</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

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
            <?php include_once'common/headerMenu.php';?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Penta Core</h1>
                        <hr class="small">
                        <span class="subheading">A Mini Blog Project</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <?php
        if(isset($_GET['s'])){
            echo " SignUp Success! You are ready for login now. </br></br>";
        }
        ?>
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <?php
                    $blog=new blogClass;
                    $allCategory=$blog->selectCategory();
                    ?>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Choose Your Article </a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <?php
                            while($category=$allCategory->fetch_assoc()){?>

                            <li><a href="index.php?cat=<?php echo $category["category_id"]?>"><?php echo            $category["category_name"]?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <?php
                    //$category=$_GET['cat'];
                    if(isset($_GET['cat'])){

                        $frontend= new FrontendClass;
                        $data=$frontend->articleDataByCatagory($_GET['cat']);
                        while($art=$data->fetch_assoc()) {
                            ?>
                            <a href="details.php?id=<?php echo $art['article_id'];?>">
                                <h2 class="post-title">
                                    <?php echo $art['article_title'];?>
                                </h2>
                                <h3 class="post-subtitle">
                                    <?php echo $art['article_subtitle'];?>
                                </h3>
                            </a>
                            <p class="post-meta"> <?php echo $art['article_brief'];?></p>
                            <p class="post-meta">written by <a href="#">Shamanur</a> on <?php echo $art['article_created_at'];?></p>
                            <hr>
                            <?php
                        }
                    }
                    else{

                        $frontend= new FrontendClass;
                        $data=$frontend->articleData();
                        while($art=$data->fetch_assoc()) {
                            ?>
                            <a href="details.php?id=<?php echo $art['article_id'];?>">
                                <h2 class="post-title">
                                    <?php echo $art['article_title'];?>
                                </h2>
                                <h3 class="post-subtitle">
                                    <?php echo $art['article_subtitle'];?>
                                </h3>
                            </a>
                            <p class="post-meta"> <?php echo $art['article_brief'];?></p>
                            <p class="post-meta">written by <a href="#">Shamanur</a> on <?php echo $art['article_created_at'];?></p>
                            <hr>

                            <?php
                        }
                    }
                    ?>
                </div>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <?php include_once'common/footerMenu.php'?>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
<!--    <script src="js/clean-blog.min.js"></script>-->

</body>

</html>
