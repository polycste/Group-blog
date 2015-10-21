<?php
if(isset($_POST['submit']) && !empty($_POST['article_title'])){
    $article_title=$_POST['article_title'];
    $article_subtitle=$_POST['article_subtitle'];
    $category_id=$_POST['category_id'];
    $article_brief=$_POST['article_brief'];
    $article_details=$_POST['article_details'];
    $user_id=$_POST['user_id'];

    //echo $article_brief ,$article_details,$article_title;


}
?>


<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style>

    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div id="section">
            <div><h2>Enter a new blog</h2></div>
            <form action="" method="post" class="form-class">
                <div class="form-group">
                    <label for="input_1"> article_title:</label>
                    <input type="text" class="form-control" id="article_title" name="article_title">
                </div>
                <div class="form-group">
                    <label for="input_2"> article_subtitle:</label>
                    <input type="text" class="form-control" id="article_subtitle" name="article_subtitle">
                </div>
                <div class="form-group">
                    <label for="input_2"> category_id:</label>
                    <input type="text" class="form-control" id="category_id" name="category_id">
                </div>
                <div class="form-group">
                    <label for="input_2"> article_brief:</label>
                    <input type="text" class="form-control" id="article_brief" name="article_brief">
                </div>
                <div class="form-group">
                    <label for="input_2"> article_details:</label>
                    <input type="text" class="form-control" id="article_details" name="article_details">
                </div>
                <div class="form-group">
                    <label for="input_2"> user_id:</label>
                    <input type="text" class="form-control" id="user_id" name="user_id">
                </div>
                <input type="submit" value="Submit" class="btn btn-default" name="submit">
            </form>
            <div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
