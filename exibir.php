<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo evento</title>
    <script src="js/scripts.js" defer></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>

    <?php

include("config.php");

$sql = "SELECT * FROM evento";
$res=$conn->query($sql);
 if($res!=true){
   print("ERRO");

 }

while($row_nome = mysqli_fetch_assoc($res)){
    echo"<br>";
    echo"<br> nome: ".$row_nome["nome"];
    echo"<br> nome: ".$row_nome["descriçao"];
    echo"<br> nome: ".$row_nome["inicio"];
  
  
   
}

?>

</body>

</html>