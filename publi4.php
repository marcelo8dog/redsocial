<?php
	$pubcam=["nombre_usuario"];
	$cone=mysqli_connect("localhost","root","","redsocial");

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
		$que="SELECT usuario.nombre_usuario,publicacion.texto_publicacion,publicacion.id_publicacion,publicacion.tiempo_publicacion FROM publicacion JOIN usuario ON usuario.id_usuario=publicacion.id_usuario";
	}
	$impor=mysqli_query($cone,$que);
	$fila=mysqli_fetch_assoc($impor);
	$rell="";
	while($fila)
	{
		$rell=$rell."
		<div class='row'>
        	<div class='col s12 l6 offset-l3' id='pub'>
            	<div class='card orange darken-1'>
              		<div class='card-content white-text'>
		                <span class='card-title'>".$fila['nombre_usuario']."<p>".$fila['tiempo_publicacion']."</p></span>
		                <p>".$fila['texto_publicacion']."</p>
              		</div>
                 	<ul class='collapsible' data-collapsible='accordion' >
    <li>
      <div onclick='collapsible()' class='collapsible-header'><i class='material-icons'>filter_drama</i>Comentarios</div>";
      	$pub=$fila['id_publicacion'];
      		if($pub>0)
      		{
      			$quecom="SELECT comentario.texto_comentario,comentario.tiempo_comentario FROM comentario JOIN publicacion ON publicacion.id_publicacion=comentario.id_publicacion WHERE comentario.id_publicacion='".$pub."'"; 
      		}
			$imporcom=mysqli_query($cone,$quecom);
			$filacom=mysqli_fetch_assoc($imporcom);
			$rellcom="";
			while($filacom)
			{
				$rellcom=$rellcom."<div class='collapsible-body'><span>".$filacom['texto_comentario']."<p>".$filacom['tiempo_comentario']."</p></span></div>";
        		$filacom=mysqli_fetch_assoc($imporcom);
			}
			$rell=$rell.$rellcom."
    </li>
  </ul>
              	</div>
            </div>
        </div>";
      
		$fila=mysqli_fetch_assoc($impor);
	}
	echo $rell;
	// echo "bienlo";
// echo "bien";

?>