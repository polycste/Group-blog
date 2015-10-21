<?php



class FrontendClass{

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

    public function articleData(){
        $sql="SELECT article_id, article_title, article_subtitle, article_brief, user_id, article_created_at FROM article WHERE article_deleted = 1 ORDER BY article_id DESC";
        $resArticleAll=$this->conn->query($sql);
        return $resArticleAll;
        /*
        if ($data=$this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return $data;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }*/
    }

    public function articleDataByCatagory($category_id){
        $sql="SELECT article_id, article_title, article_subtitle, article_brief, user_id, article_created_at FROM article WHERE article_deleted = 1 AND category_id = $category_id ORDER BY article_id DESC";
        $resArticleAll=$this->conn->query($sql);
        return $resArticleAll;
        /*if ($this->conn->query($sql) == TRUE) {
            //echo "New record created successfully";

            return 1;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }*/
    }
}