<?php
class blogClass{
    public $conn;

    public function __construct(){

        $serverName = "localhost";
        $userName 	= "root";
        $password 	= "";
        $db 		= "blog";
        $this->conn 		= new mysqli($serverName,$userName,$password,$db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        //echo "Connected successfully"."<br>";
    }

    //######################################## user table start here ###################################
    public function selectUsers(){
        return 1;
    }
    public function selectOneUser(){

    }

    public function insertUser(){

    }

    public  function updateUser(){

    }

    public function deleteUser(){

    }


    //######################################## article table start here ###################################
    //insert article
    public function insertArticle($article_title, $article_subtitle, $category_id, $article_sequence, $article_brief, $article_details, $user_id, $article_created_at ){

        $sql = "INSERT INTO article (article_title, article_subtitle, category_id, article_sequence, article_brief, article_details, user_id, article_created_at) VALUES ('$article_title', '$article_subtitle', '$category_id','$article_sequence', '$article_brief', '$article_details', '$user_id','$article_created_at')";
        //$resCatInsert=$this->conn->query($sql);
        //return $this->conn->insert_id;
        if ($this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return $this->conn->insert_id;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    //select all article
    public function selectArticle($user_id){
        $sql="SELECT article_id, article_title, article_subtitle, category_id, article_sequence, article_brief, article_details, user_id, article_deleted, article_deleted_at, article_created_at, article_total_hits FROM article WHERE article_deleted = 1 AND user_id=$user_id ORDER BY article_id DESC ";
        $resArticleAll=$this->conn->query($sql);
        return $resArticleAll;
    }

    // select one article
    public function selectOneArticle($article_id){
        $sql="SELECT article_id, article_title, article_subtitle, category_id, article_sequence, article_brief, article_details, user_id, article_deleted, article_deleted_at, article_created_at, article_img FROM article WHERE article_deleted = 1 AND article_id = $article_id ORDER BY article_id DESC";
        /*if ($resOneArticle=$this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";
            return $resOneArticle;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }*/
        $resOneArticle=$this->conn->query($sql);
        return $resOneArticle;

    }

    public function updateArticle($article_id, $article_title, $article_subtitle, $category_id, $article_sequence, $article_brief, $article_details, $user_id){
        $sql="UPDATE article SET article_title='$article_title', article_subtitle='$article_subtitle', category_id='$category_id', article_sequence='$article_sequence', article_brief='$article_brief', article_details='$article_details', user_id='$user_id' WHERE article_id='$article_id'";
        if ($this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return 1;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        //$this->conn->query($sql);
        //return 1;
    }
    public function deleteArticle($article_id){
        $sql="UPDATE article SET article_deleted=2 WHERE article_id='$article_id'";
        if ($this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return 1;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    public function total_hits($article_id){
        $sql="UPDATE article SET article_total_hits=article_total_hits+1 WHERE id='$article_id'";
        $this->conn->query($sql);
        return 1;
    }



    //#################################### category table ##############################################
    public function insertCategory($category_name,$created_at){

        $sql = "INSERT INTO category (category_name,created_at) VALUES ('$category_name','$created_at')";
        $resCatInsert=$this->conn->query($sql);
        return $this->conn->insert_id;
    }
    public function selectCategory(){

        $sql="SELECT category_id, category_name, created_at FROM category WHERE category_deleted=1 ORDER BY category_id DESC";
        $resCategoryAll=$this->conn->query($sql);
        return $resCategoryAll;

    }public function selectOneCategory($category_id){

        $sql="SELECT category_id, category_name, created_at FROM category WHERE category_deleted=1 AND category_id='$category_id'";
        $resCategory=$this->conn->query($sql);
        return $resCategory;

    }
    public function updateCategory($category_id, $category_name){

        $sql="UPDATE category SET category_name='$category_name' WHERE category_id='$category_id'";
        $resCatUpdate=$this->conn->query($sql);
        return $resCatUpdate;
    }
    public function deleteCategory($category_id){
        $sql="UPDATE category SET category_deleted=2 WHERE category_id='$category_id'";
        //$sql="UPDATE article SET article_deleted=2 WHERE article_id='$article_id'";
        if ($this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return 1;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        //$this->conn->query($sql);
       // return 1;
    }

}

