$(document).ready(function(){
  $('.parallax').parallax();
    /*setInterval(function(){
        $("body").hide();
    },10);
    $("body").show();*/
});
$("#formu").on("submit",function(){
  event.preventDefault();
  $.ajax({
    url:"../programs/sesion.php",
    type:"GET",
    dataType: "text",
    success: function (resp){
      console.log(resp);
      $("#valusu").html(""+resp+"");
      }
  });
});
