<?php
include("config.php");
$nome=$_POST["nome"];
$descricao=$_POST["descriçao"];
$inicio=$_POST["data_inicio"];
$fim=$_POST["data_fim"];
$wifi=$_POST["wifi"];
$bebida=$_POST["bebida"];
$estaciona =$_POST["estacionamento"];
$tipo=$_POST["tipo"];
if(isset($_FILES['arquivo'])){
    $arquivo=$_FILES['arquivo'];
    if($arquivo['error']){
        die("Falha ao enviar img");
    }
   
    print('arquivo enviado');
    $pasta="arquivos/";
    $nomeOriginal=$arquivo['name'];
    $novoNome=uniqid();
    $extesao=strtolower(pathinfo($nomeOriginal,PATHINFO_EXTENSION));//pegado a extençao e convetendo ela para minusculo
    if($extesao!="jpg"&& $extesao!="png"){
        die("extençao invalida");
    }

    $resultado_move=move_uploaded_file($arquivo["tmp_name"], $pasta. $novoNome .".".$extesao);
    $path=$pasta.$novoNome.".".$extesao;
    
    if($resultado_move){
       echo"<p>arquivo enviado</p>,<a target=\"_bank\"href=\"arquivos/$novoNome.$extesao\"> mostrar imagem</a></p>";
       $novoNome=$novoNome.".".$extesao;
        $sql= "INSERT INTO arquivos(nome,path,nome_modificado,data_upload)values('$nomeOriginal','$path','$novoNome',now())";
        
        $res=$conn->query($sql);
        if($res==TRUE){
            $sql= "SELECT id FROM arquivos WHERE nome_modificado = '$novoNome' ";
            $res=$conn->query($sql);

            while($row_nome = mysqli_fetch_assoc($res)){
                $id_img=$row_nome["id"];
            }
            //print($id_img);
        }
    }else{
        print("move Nao funciona");

    }
    

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

$sql="SELECT * FROM tipos WHERE tipo ='$tipo'";
$res=$conn->query($sql);
if($res->num_rows ==0){
    
    $sql="INSERT INTO  tipos(tipo)value('$tipo')";
    $res=$conn->query($sql);
    $sql="SELECT * FROM tipos WHERE tipo ='$tipo'";
    $res=$conn->query($sql);
    while($row_nome = mysqli_fetch_assoc($res)){
        $id_tipo=$row_nome["id"];
    }
    $sql = "INSERT INTO evento(nome,descriçao,inicio,fim,wifi,bebida,estacionamento,id_img,id_tipo)
    VALUES('$nome','$descricao','$inicio','$fim','$wifi','$bebida','$estaciona','$id_img','$id_tipo')";
    $res=$conn->query($sql);

}else{
   
    while($row_nome = mysqli_fetch_assoc($res)){
        $id_tipo=$row_nome["id"];
    }
    
    $sql = "INSERT INTO evento(nome,descriçao,inicio,fim,wifi,bebida,estacionamento,id_img,id_tipo)
    VALUES('$nome','$descricao','$inicio','$fim','$wifi','$bebida','$estaciona','$id_img','$id_tipo')";
    $res=$conn->query($sql);

}



 if($res==true){
    print("\nevento criado\n");
  //  include("exibir.php");

 }else{


    print("Erro ");
    include("cadastro_evento");
    
 }

 




?>