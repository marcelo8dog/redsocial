<?php
  $pubcam=["nombre_usuario"];
  	$cone=mysqli_connect("localhost","root","","javascript");

  	if(!$cone)
  	{
  		echo "conexion fallida";
  	}
  	if(isset($_POST['usu']))
  	{
  		$usu=$_POST['usu'];
  	}
  	else
  		$usu="";
  	if($usu!="")
  	{
  		$que="SELECT usuario.nombre_usuario,publicacion.texto_publicacion FROM publicacion JOIN usuario ON usuario.id_usuario=publicacion.id_usuario";
  	}
  	$impor=mysqli_query($cone,$que);
  	$fila=mysqli_fetch_assoc($impor);
  	$rell="";
  	while($fila)
  	{
  		$rell=$rell."<div class='row' >
            <div class='col s12 l6 offset-l3' id='pub'>
              <div class='card orange darken-1'>
                <div class='card-content white-text'>
                  <span class='card-title'>".$fila['nombre_usuario']."</span>
                  <p>".$fila['texto_publicacion']."</p></div>
                <div class='card-action'>
                </div></div>
            </div>
          </div>";
  		$fila=mysqli_fetch_assoc($impor);
  	}
  	echo $rell;
?>
