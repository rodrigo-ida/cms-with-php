<?php


    class Db{


        protected $connection;
        
        function __construct(){
            
            $this->connection = mysqli_connect('localhost', 'root', '', 'cms');

        }


        

        function create(){

            if(isset($_POST['submit'])){

                $aa = $_POST['nome'];
                $aa1 = $_POST['nome2'];
                $aa2 = $_POST['nome3'];
                $aa3 = $_POST['nome1'];
                
                
                $query = "INSERT INTO category(cat_title, teste, teste2, teste3) VALUES ( '$aa', '$aa1', '$aa2', '$aa3')";
                
                $result = mysqli_query($this->connection, $query);
                
                if(!$result){

                    echo mysqli_error($this->connection);
                    
                } 
                echo '<script> window.location.href = "http://localhost/php-treino/cms/includes/db.php" </script>';
            }
        }

        function read(){

            $query = "SELECT * FROM category";

            $result = mysqli_query($this->connection, $query);

             $result;

             while($row = mysqli_fetch_row($result)){

                print_r ($row);
             }
        }

        function update(){
            
        }


    }


?>