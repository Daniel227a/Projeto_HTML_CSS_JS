const btn = document.querySelector("#send");

btn.addEventListener("click", function (e) {
  const nome = document.querySelector("#_nome");
  const descriçao = document.querySelector("#_descriçao");
  const inicio = document.querySelector("#_data_inicio");
  const fim = document.querySelector("#_data_fim");
  const img = document.querySelector("#imgT");

  var nome_temp = nome.value;
  var descriçao_temp = descriçao.value;
  var inicio_temp = inicio.value;
  var fim_temp = fim.value;
  var img_temp = img.value;
  var novoArray = new Array(
    nome_temp,
    descriçao_temp,
    inicio_temp,
    fim_temp,
    img_temp
  );

  /*
  if (" " in novoArray || null in novoArray) {
    alert("insira todos os campos");
    e.preventDefault();
  }
 **/
  for (i = 0; i < novoArray.length; i++) {
    if (novoArray[i] == "" || novoArray[i] == null) {
      alert("insira todos os campos");
      e.preventDefault();
      include("cadastro_evento.php");
    }
  }
});
$("#_wifi").click(function () {
  if ($(this).is(":checked")) {
    $(this).attr("checked", true);
  } else {
    $(this).attr("checked", false);
  }
});
$("#_bebida").click(function () {
  if ($(this).is(":checked")) $(this).attr("checked", true);
  else $(this).removeAttr("checked");
});
