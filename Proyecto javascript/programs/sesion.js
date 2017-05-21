$(document).ready(function(){
    $('.parallax').parallax();
    $("#animacion").hide();
    $("#body2").hide();
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
        $("#body2").hide();
        $("#animacion").show();
        setInterval(function(){
            $("#animacion").hide();
            $("#body2").show();
            $("#nom").html(usu);
            $("#nom2").html(usu);
            $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: false,
              hover: true,
              gutter: 0,
              belowOrigin: false,
              alignment: 'left',
              stopPropagation: false
            });
        },7000);
      }
    }
  });
});
