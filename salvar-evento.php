<?php

$nome=$_POST["nome"];
$descricao=$_POST["descriçao"];
$inicio=$_POST["data_inicio"];
$fim=$_POST["data_fim"];
$wifi=$_POST["wifi"];
$bebida=$_POST["bebida"];
$estaciona =$_POST["estacionamento"];
if(isset($_FILES['arquivo'])){
    $arquivo=$_FILES['arquivo'];
    if($arquivo['error']){
        die("Falha ao enviar img");
    }
   
    print('arquivo enviado');
    $pasta="/arquivos";
    $nomeOriginal=$arquivo['name'];
    $novoNome=uniqid();
    $extesao=strtolower(pathinfo($nomeOriginal,PATHINFO_EXTENSION));//pegado a extençao e convetendo ela para minusculo

    print($extesao);

}


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
 $sql = "INSERT INTO evento(nome,descriçao,inicio,fim,wifi,bebida,estacionamento)
 VALUES('$nome','$descricao','$inicio','$fim','$wifi','$bebida','$estaciona')";
 $res=$conn->query($sql);
 if($res==true){
    print("\nevento criado\n");
  //  include("exibir.php");

 }else{


    print("Erro ");
    include("cadastro_evento");
    
 }

 




?>