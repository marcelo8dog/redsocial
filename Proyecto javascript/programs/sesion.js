$(document).ready(function(){
    $('.parallax').parallax();
    $("#animacion").hide();
});
$("#formu").on("submit",function(){
  event.preventDefault();
  var usu=$("#usu").val();
  var cont=$("#cont").val();
  $.ajax({
    url:"../programs/sesion.php",
    type:"POST",
    dataType: "text",
    data: {
      usuario: usu,
      contra: cont
    },
    success: function (resp){
      val=resp;
      console.log(val);
      $("#validacion").html(resp);
      if(resp=="BIENVENIDO")
      {
        $("#body").hide();
        $("#animacion").show();
        setInterval(function(){
            $("#animacion").hide();
            $("#body").show();
        },7000);
      }
    }
  });
});
