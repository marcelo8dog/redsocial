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
              constrainWidth: false, // Does not change width of dropdown to that of the activator
              hover: true, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: false, // Displays dropdown below the button
              alignment: 'left', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            }
          );
        },2000);
      }
    }
  });
});
