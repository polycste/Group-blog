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
/*if(isset($_POST['submit'])){
	$info = pathinfo($_FILES['userFile']['name']);
	$target_Path = "img/";
	$ext=["png","jpeg", "gif"];
	$upload=uploadFile($info,$ext,$target_Path);

}

function uploadFile($info, $ext,$target_Path){
	//$ext=explode(",", $ext);
	$ext_info = $info['extension'];
	if(in_array($ext_info,$ext)){
		//$target_Path = "assignment/";
		$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
		move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
		echo "Upload success";
	}else{
		echo "extension does not match.";
	}
}*/

if(isset($_POST['submit']) && !empty($_POST['article_title'])){
    $article_title=$_POST['article_title'];
    $article_subtitle=$_POST['article_subtitle'];
    $category_id=$_POST['category_id'];
    $article_brief=$_POST['article_brief'];
    $article_details=$_POST['article_details'];
    $user_id=$_SESSION["user_id"];
    $article_sequence=1;
    $article_created_at=date("Y-m-d H:i:s");

    //echo $article_title,$category_id,$article_created_at;

    $blog=new blogClass;

    $insertArticle=$blog->insertArticle($article_title, $article_subtitle, $category_id, $article_sequence, $article_brief, $article_details, $user_id, $article_created_at);



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
					<div><h2>Enter a new blog</h2></div>
                    <?php
                    if(isset($insertArticle)){?>
                        <div class="alert alert-success">
                            New Article insert <strong>Success!</strong>
                        </div>
                        <?php
                    }
                    ?>
					<form action="" method="post" class="form-class" enctype='multipart/form-data'>
						<div class="form-group">
							<label for="input_1"> Article Title:</label>
							<input type="text" class="form-control" id="article_title" name="article_title" required="required">
						</div>
						<div class="form-group">
							<label for="input_2"> Article Subtitle:</label>
							<input type="text" class="form-control" id="article_subtitle" name="article_subtitle" required="required">
						</div>

                        <div class="form-group">
                            <label for="category_id"> Category Name</label>
                            <select name="category_id" class="form-control" required="required">
                                <?php
                                $blog=new blogClass;
                                $allCat=$blog->selectCategory();
                                //print_r($allCat);
                                while($Cat=$allCat->fetch_assoc()){?>
                                    <option value="<?php echo $Cat['category_id'];?>"><?php echo $Cat['category_name'];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
						<div class="form-group">
							<label for="input_2"> Article Brief:</label>
							<input type="text" class="form-control" id="article_brief" name="article_brief" required="required">
						</div>
						<div class="form-group">
							<label for="input_2"> Article Details:</label>
							<textarea type="text" class="form-control" id="article_details" name="article_details"></textarea>
						</div>
						<div class="form-group">
							<input type='file' name='userFile' class="form"><br>
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
	</body>
</html>