<?php

$nome=$_POST["nome"];
$descricao=$_POST["descriçao"];
$inicio=$_POST["data_inicio"];
$fim=$_POST["data_fim"];
$wifi=$_POST["wifi"];
$bebida=$_POST["bebida"];
$estaciona =$_POST["estacionamento"];
$img=$_POST["img"];

 include("config.php");
 $sql = "INSERT INTO evento(nome,descriçao,inicio,fim,wifi,bebida,estacionamento,img)
 VALUES('$nome','$descricao','$inicio','$fim','$wifi','$bebida','$estaciona','$img')";
 $res=$conn->query($sql);
 if($res==true){
    print("feito");
 }



?>