<?php
include("config.php");
$nome=$_GET['nome'];
$id=$_GET['id'];
//print($nome);

$sql = "SELECT * FROM evento WHERE id='$id'";
$res=$conn->query($sql);
if($res!=true){
    print("ERRO");

}

while($row_nome = mysqli_fetch_assoc($res)){
              echo"<br> nome: ".$row_nome["nome"];
             echo"<br> Descriçao ".$row_nome["descriçao"];
               echo"<br> inicio: ".$row_nome["inicio"];
               echo"<br> fim: ".$row_nome["fim"];
               echo"<br> estacionamento: ".$row_nome["estacionamento"];
               echo"<br> bebida: ".$row_nome["bebida"];
               echo"<br> wifi: ".$row_nome["wifi"];



}

?>