<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .titulo {
        line-height: 80px;
        text-align-last: center;

        background-color: black;
        color: rgb(238, 255, 4);
    }

    .menu {
        width: 5%;

        border-style: none;


        border-color: rgba(219, 53, 53, 0.5), ;

        background-color: rgb(255, 255, 255);

        background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(2, 0, 0, 0.959))
    }

    .link {
        text-align: center;
        width: 100%;
        font-size: 22px;

        background-color: rgb(255, 31, 31);
        color: black;
    }

    .caixa {

        color: rgb(0, 0, 0);
        background: rgba(212, 162, 162, 0.575);
        text-align: justify;
        width: 20%;

        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border: 2px red inset;
        ;
        display: inline-block;


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

    body {
        background: rgba(255, 255, 255, 0.5)
    }
    </style>
</head>

<body>
    <div>
        <ul>
            <center>
                <a target="\_bank\" href="?page=cadastro_evento">Novo usuario</a>
                </ceter>

        </ul>



    </div>



    <?php
    include("config.php");
    $sql = "SELECT * FROM evento";
    $res=$conn->query($sql);
    
    if($res->num_rows!=0){
        include("exibir.php");
    }
   
    switch(@$_REQUEST["page"]){

        
        case 'cadastro_evento':
            include("cadastro_evento.php");
            break;

        case 'salvar':
            
           // include ("teste.php");
            include("salvar-evento.php");
            break;

            
    }

    ?>
</body>

</html>