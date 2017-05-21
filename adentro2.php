<!DOCTYPE html>
  <html>
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <style>
      #pub
      {
        position:relative;
        top:40px;
        
      }
      #foot
      {
        position:relative;
        top:100px;
      }
      span p
      {
        position:absolute;
        left:350px;
        font-size:15px;
        display:inline;
      }
      </style>
    </head>
    <body>
    <nav>
        <div class="nav-wrapper #e65100 orange darken-4">
          <a href="#" class="brand-logo center">ChatSpace</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down"></ul>
        </div>
    </nav>
    <div id="todo">
      
    </div>
    	<footer class="page-footer #e65100 orange darken-4" id="foot">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Just To Friends®</h5>
          </div>
        </div>
      </div>
      <div class="footer-copyright #bf360c deep-orange darken-4">
        <div class="container">
          © 2017 Copyright Text
        </div>
      </div>
    </footer>

<?php
for($a=1;$a<20;$a++)
    {
      $r="";
      $cnom="com".$a;
      $pnom=(isset($_POST[$cnom]))?$_POST[$cnom]:"";
      if($pnom!="")
      {
        echo "<h1 id='resol'>".$pnom."</h1>";
        $r=$a;
        $a=20;
      } 
    }

?>
    <script>
          var aj="id";
            $.ajax(
              {
                  url:"publi4.php",
                  type:"POST",
                  data:
                  {
                    usu:aj
                  },
                  success:function(dato)
                  {
                    $("#todo").append(dato);
                  }
              });
            var com=$("#resol").attr();
            alert(com);
            function collapsible()
            {
                $(".collapsible").collapsible();
            }
    </script>
    </body>
  </html>