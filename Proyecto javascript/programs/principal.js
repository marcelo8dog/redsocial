var aj="id";
$.ajax(
{
    url:"../programs/publi2.php",
    type:"POST",
    data:
    {
        usu:aj
    },
    success:function(dato)
    {
      $("#todo").html(dato);
    }
  });
