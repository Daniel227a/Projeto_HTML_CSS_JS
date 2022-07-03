<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a target="\_bank\" href="?page=cadastro_evento">Novo usuario</a>
    <a href="?page=teste">teste</a>

    <?php
    include("exibir.php");
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