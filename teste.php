<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo evento</title>


</head>

<body>


    <?php
     include("config.php");
     $nome=$_POST["nome"];
     $descricao=$_POST["descriçao"];
     $inicio=$_POST["data_inicio"];
     $fim=$_POST["data_fim"];
     $wifi=$_POST["wifi"];
     $bebida=$_POST["bebida"];
     $estaciona =$_POST["estacionamento"];
    
     echo'<p>'.$nome."</p>\n";
    
     echo'<p>'.$descricao."</p>\n";
     echo'<p>'.$inicio."</p>\n";
     echo'<p>'.$fim."</p>\n";
     echo'<p> WIFI :'.$wifi."</p>\n";
     
     echo'<p > bebida :'.$bebida."</p>\n";
     echo'<p > estacionamento:'.$estaciona."</p>\n";
    
    ?>


</body>


</html>