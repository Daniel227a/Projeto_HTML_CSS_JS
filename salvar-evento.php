<?php

$nome=$_POST["nome"];
$descricao=$_POST["descriçao"];
$inicio=$_POST["data_inicio"];
$fim=$_POST["data_fim"];
$wifi=$_POST["wifi"];
$bebida=$_POST["bebida"];
$estaciona =$_POST["estacionamento"];
$img=$_POST["img"];


if($wifi==true){
    $wifi=1;


}else{
    $wifi=0;
}
if($bebida==true){
    $bebida=1;


}else{
    $bebida=0;
}

if($estaciona==true){
    $estaciona=1;


}else{
    $estaciona=0;
}
 include("config.php");
 $sql = "INSERT INTO evento(nome,descriçao,inicio,fim,wifi,bebida,estacionamento,img)
 VALUES('$nome','$descricao','$inicio','$fim','$wifi','$bebida','$estaciona','$img')";
 $res=$conn->query($sql);
 if($res==true){
    print("feito");

 }else{


    print("Erro ");
    include("cadastro_evento");
    
 }

 




?>