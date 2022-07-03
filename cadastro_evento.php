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
    <h2>novo evento </h2>

    <form action="?page=salvar" enctype="multipart/form-data" method="POST" id="form">

        <input type="hidden" name="acao" value="cadastrar">
        <div>
            <p>Nome</p>
            <input type="text" name="nome" id="_nome">
        </div>
        <div>
            descriçao
            <input type="text" name="descriçao" id="_descriçao">
        </div>
        <div>
            data de inicio
            <input type="date" name="data_inicio" id="_data_inicio">
        </div>
        <div>
            Tipo do evennto
            <input type="text" name="tipo" id="_tipo">
        </div>
        <div>
            data de fim
            <input type="date" name="data_fim" id="_data_fim">
        </div>
        <div>
            wifi
            <input type="checkbox" name="wifi" id="_wifi" value=1>
        </div>
        <div>
            bebida
            <input type="checkbox" name="bebida" id="_bebida" value=1>
        </div>
        <div>
            estacionamento
            <input type="checkbox" name="estacionamento" id="_estaciona" value=1>
        </div>
        <div>
            img
            <input type="file" accept="image/*" id="imgT" name="arquivo">
            <br>
            <img id="view-img" src="default.jpg" width="18%" height="20%">
        </div>
        <button type="submit" id="send">enviar</button>
    </form>
</body>
<script>
$("#imgT").change(function() { //mostar miniatura anntes do envio 
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#view-img').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});



$("#form").submit(function() {
    if ($("#_nome").val() == null || $("_#nome").val() == "") {
        alert('campo vazio');

        return false;
    }
});
</script>

</html>