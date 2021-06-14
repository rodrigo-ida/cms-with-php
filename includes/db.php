<?php 



    $connection = mysqli_connect('localhost', 'root', '', 'cms');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>criando</h1>
    <form action="http://localhost/php-treino/cms/includes/create.php" method="post">
        <input type="text" name="nome"> 
        <input type="text" name="nome1"> 
        <input type="text" name="nome2"> 
        <input type="text" name="nome3"> 
        <input type="submit" name="submit" >
    </form>
    
    <h1>lendo</h1>
    
    <?php 


        include './read.php';

?>

    
</body>
</html>