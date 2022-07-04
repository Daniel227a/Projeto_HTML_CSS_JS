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
                $id_img=$row_nome["id_img"];
                $id_tipo=$row_nome["id_tipo"];
                $sql1="SELECT path FROM arquivos WHERE id='$id_img'";
                $res1=$conn->query($sql1);
                while($row_img = mysqli_fetch_assoc($res1)){
                    $temp=$row_img["path"];
                    echo"<p>arquivo enviado</p>,<a href=\"$temp\"> mostrar imagem</a></p>";
                    echo '<img  width="18%" height="20%" src="'.$row_img['path'].'">';
                
                
                }
            }

        ?>

</body>

</html>