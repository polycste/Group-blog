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

//include_once'connection.php';
include_once'dbClass.php';
$article="";
if(isset($_GET['id']) && !empty($_GET['id'])){
    $article_id=$_GET['id'];
    //$sql="SELECT article_id, article_title, article_subtitle, category_id, article_sequence, article_brief, article_details, user_id, article_deleted, article_deleted_at, article_created_at FROM article WHERE article_deleted = 1 AND article_id = $article_id ORDER BY article_id DESC";
    $blog=new blogClass;
    $data=$blog->selectOneArticle($article_id);
    $article=$data->fetch_assoc();
}

if(isset($_POST['submit']) && !empty($_POST['article_title'])){
    $article_title=$_POST['article_title'];
    $article_subtitle=$_POST['article_subtitle'];
    $category_id=$_POST['category_id'];
    $article_brief=$_POST['article_brief'];
    $article_details=$_POST['article_details'];
    $user_id=2;
    $article_sequence=1;
    $article_created_at=date("Y-m-d H:i:s");
    $article_id=$_POST['article_id'];
    //echo $article_title,$category_id,$article_created_at;

    $blog=new blogClass;

    $insertArticle=$blog->updateArticle($article_id,$article_title, $article_subtitle, $category_id, $article_sequence, $article_brief, $article_details, $user_id);

    header('Location: listArticle.php?s=1');


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
            <div><h2>Update a blog</h2></div>
            <?php
            if(isset($insertArticle)){?>
                <div class="alert alert-success">
                    New Article insert <strong>Success!</strong>
                </div>
                <?php
            }
            ?>
            <form action="" method="post" class="form-class">
                <div class="form-group">
                    <label for="input_1"> Article Title:</label>
                    <input type="text" class="form-control" id="article_title" name="article_title" value="<?php echo$article['article_title']; ?>">
                </div>
                <div class="form-group">
                    <label for="input_2"> Article Subtitle:</label>
                    <input type="text" class="form-control" id="article_subtitle" name="article_subtitle" value="<?php echo$article['article_subtitle']; ?>">
                </div>

                <div class="form-group">
                    <label for="category_id"> Category Name</label>
                    <select name="category_id" class="form-control">
                        <?php
                        $blog1=new blogClass;
                        $allCat=$blog1->selectCategory();
                        //print_r($allCat);
                        while($Cat=$allCat->fetch_assoc()){?>
                            <option value="<?php echo $Cat['category_id'];?>" <?php if($Cat["category_id"]==$article['category_id']){echo "selected='selected'";} ?> > <?php echo $Cat['category_name'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input_2"> Article Brief:</label>
                    <input type="text" class="form-control" id="article_brief" name="article_brief"  value="<?php echo$article['article_brief']; ?>">
                    <input type="hidden" class="form-control" id="article_id" name="article_id"  value="<?php echo$article['article_id']; ?>">
                </div>
                <div class="form-group">
                    <label for="article_details"> Article Details:</label>
                    <textarea type="text" class="form-control" id="article_details" name="article_details"><?php echo$article['article_details']; ?></textarea>
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