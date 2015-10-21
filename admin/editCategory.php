<?php

session_start();
if(empty($_SESSION["user_name"])){
    header('location:login/login.php');
}
else{
/**/?><!--
	<h2><?php /*echo "hi," .$_SESSION['user_name'] */?> Welcome here</h2>

	<?php /*echo "Do you want to exit???  "  . $_SESSION["user_name"]*/?><a href="login/logout.php">Logout</a>
	echo
	--><?php
}

include_once'dbClass.php';

if(isset($_POST['submit']) && !empty($_POST['category_name'])){
    $category_name=$_POST['category_name'];
    $category_id=$_POST['category_id'];

    $created_at=date("Y-m-d H:i:s");

    //echo $article_title,$category_id,$article_created_at;

    $blog=new blogClass;

    $insertCategory=$blog->updateCategory($category_id,$category_name);

}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="border:10px solid #BF8F94 ">
            <img src="img/Thumb.jpg">
            <div style="float:right; margin-top:10px">
                <h3>hi <?php echo $_SESSION["user_name"]; ?> | <a href="login/logout.php">Logout</a></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="border:10px solid #BF8F94 ">

            <ul class="nav nav-pills">
                <!--<li class="active"><a href="index.php">Home</a></li>-->
                <li><a href="insertArticle.php">Add Article</a></li>
                <li><a href="listArticle.php">Manage Article</a></li>
                <li><a href="insertCategory.php">Add category</a></li>
                <li><a href="listCategory.php">Manage category</a></li>
                <li><a href="listUser.php">Manage User</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="border:10px solid #BF8F94;">
            <div><h2>Edit a new category</h2></div>
            <?php
            if(isset($insertCategory)){?>
                <div class="alert alert-success">
                    Category Update <strong>Success!</strong>
                </div>
                <?php
            }
            ?>
            <form action="" method="post" class="form-class">
                <div class="form-group">
                    <label for="category_name"> Category Name:</label>
                    <?php
                    $catecory=new blogClass();
                    $data=$catecory->selectOneCategory($_GET['id']);
                    $cat=$data->fetch_assoc();
                    ?>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo $cat['category_name'];?>">
                    <input type="hidden" class="form-control" id="category_id" name="category_id" value="<?php echo $cat['category_id'];?>">
                </div>

                <input type="reset" value="Cancel" class="btn btn-default">
                <input type="submit" value="Submit" class="btn btn-success" name="submit">
            </form></br>
        </div>
        <!--<div class="col-md-4" style="border:10px solid #BF8F94;">
            <h1>This is right content</h1>
        </div>-->
    </div>
    <div class="row">
        <div class="col-md-12" style="border:10px solid #BF8F94 ">
            <div style="float:right; margin-bottom:10px" >
                <a href="http://facebook.com"><img src="img/facebook.png" style="height:30px; width:30px"></a>
                <a href="#"><img src="img/gmail-icon.png" style="height:30px; width:30px"></a>
                <a href="#"><img src="img/linkdin.png" style="height:30px; width:30px"></a>
                <a href="#"><img src="img/twitter.png" style="height:30px; width:30px"></a>

            </div>
            <div>
            </div>
            <div class="row" >
                <div class="col-md-12" style="border:10px solid #BF8F94; text-align:center" >
                    <div class="page-footer">
                        <div class="page-footer-inner">
                            2015 &copy;. pentacore blog
                        </div>
                        <div class="scroll-to-top">
                            <i class="icon-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>