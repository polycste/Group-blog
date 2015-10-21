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

//echo $_POST['Delete_id'];
if(isset($_POST['delete']) && !empty($_POST['Delete_id'])){
    $delete=new blogClass();
    $data=$delete->deleteCategory($_POST['Delete_id']);
    //echo $data;
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
            <div><h2>List a new Category</h2></div>
            <table class="table">
                <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $blog=new blogClass;
                $allCategory=$blog->selectCategory();
                while($category=$allCategory->fetch_assoc()){?>
                    <tr class="success">
                        <td><?php echo $category["category_name"]?></td>
                        <td><?php echo $category["created_at"]?></td>
                        <td><a href="editCategory.php?id=<?php echo $category["category_id"]?>" class="btn btn-info">Edit</a></td>
                        <td>
                            <form method="post" action="listCategory.php">
                                <input name="Delete_id" type="hidden" id="art_id" value="<?php echo $category["category_id"]?>">
                                <input name="delete" type="submit" id="delete" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
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