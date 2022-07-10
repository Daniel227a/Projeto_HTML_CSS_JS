<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo evento</title>
    <script src="js/scripts.js" defer></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <style>
    .titulo {
        line-height: 80px;
        text-align-last: center;

        background-color: black;
        color: rgb(238, 255, 4);
    }


    .menu {
        width: 25%;

        border-style: none;
        height: 755px;
        border: 11px;
        border-color: rgba(219, 53, 53, 0.5), ;






        background-color: rgb(255, 255, 255);
        float: left;
        background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(2, 0, 0, 0.959))
    }

    .link {
        text-align: center;
        width: 20%;
        font-size: 22px;

        background-color: rgb(255, 31, 31);
        color: black;
    }

    .pr {
        display: flex;

    }

    .caixa {

        color: rgb(0, 0, 0);
        background: rgba(212, 162, 162, 0.575);
        text-align: justify;
        width: 35%;

        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border: 2px red inset;

        display: inline-block;

        float: right;
    }

    footer {
        position: absolute;
        bottom: 0;

        color: black;
        width: 100%;
        font-size: 32px;

        text-align: center;


    }

    #grad {
        background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(2, 0, 0, 0.959));
    }
    </style>
</head>

<body id="grad">

    <?php
include("config.php");

    $pagina=$_GET['page'];
    $quantide=4;
    $sql = "SELECT * FROM evento LIMIT $pagina,$quantide";
    $res=$conn->query($sql);
            if($res!=true){
                print("ERRO");

            }
            print($res->num_rows);
           
           //$cont_page=intval($res->num_rows/$elementos)+1;
           

            while($row_nome = mysqli_fetch_assoc($res)){
                echo"<br>";
              //  echo"<br> nome: ".$row_nome["nome"];
               // echo"<br> Descriçao ".$row_nome["descriçao"];
               // echo"<br> inicio: ".$row_nome["inicio"];
                $id_img=$row_nome["id_img"];
                $id_tipo=$row_nome["id_tipo"];
                $sql1="SELECT path FROM arquivos WHERE id='$id_img'";
                $res1=$conn->query($sql1);
                while($row_img = mysqli_fetch_assoc($res1)){
                    $temp=$row_img["path"];
                    $postNome=$row_nome["nome"];
                    
                    
                    //echo"<br>";
                    echo 
                    '<div >
                   
                        <div class="caixa">
                       
                            <center>
                                nome: "'.$row_nome["nome"].'"
                                <br>
                                Descriçao: "'.$row_nome["descriçao"].'"
                                <br>
                                inicio: "'.$row_nome["inicio"].'"
                                <br>
                                <img  width="58%" height="65%" src="'.$row_img['path'].'" >
                                <p>arquivo enviado</p>,<a href='.$temp.'> mostrar imagem</a></p>
                                <a href="info.php?nome='.$row_nome["nome"].'& id='.$row_nome["id"].'">
                               
                                <button type="submit"  >pagia</button>
                             
                             </a>
                            </center>
                            
                        </div>
                   
                    </div>
                  ';
                 # <button type="submit" name ="p" value="'.$_SESSION["a"] = $postNome.'" >pagia</button>
                
                }
            }






?>

    <div>


    </div>
</body>

</html>