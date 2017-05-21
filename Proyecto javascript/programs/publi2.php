<?php
	$pubcam=["nombre_usuario"];
	$cone=mysqli_connect("localhost","root","","javascript");

	if(isset($_POST['usu']))
	{
		$usu=$_POST['usu'];
	}
	else
		$usu="";
	if($usu!="")
	{
		$que="SELECT usuario.nombre_usuario,publicacion.texto_publicacion,publicacion.id_publicacion,publicacion.tiempo_publicacion FROM publicacion JOIN usuario ON usuario.id_usuario=publicacion.id_usuario";
	$impor=mysqli_query($cone,$que);
	$fila=mysqli_fetch_assoc($impor);
	$rell="";
	while($fila)
	{
		$rell=$rell."
		<div class='row'>
        	<div class='col s12 l6 offset-l3 ' id='pub'>
            	<div class='card orange darken-1 z-depth-5'>
              		<div class='card-content white-text'>
		                <span class='card-title'>".$fila['nombre_usuario']."<p>".$fila['tiempo_publicacion']."</p></span>
		                <p>".$fila['texto_publicacion']."</p>
              		</div>
                 	<ul class='collapsible' data-collapsible='accordion' >
    <li>
      <div onclick='collapsible()' class='collapsible-header'><i class='material-icons'>textsms</i>Comentarios</div>";
      	$pub=$fila['id_publicacion'];
        if($pub>0)
      		{
      			$quecom="SELECT comentario.texto_comentario,comentario.tiempo_comentario,comentario.id_usuario FROM comentario JOIN publicacion ON publicacion.id_publicacion=comentario.id_publicacion WHERE comentario.id_publicacion='".$pub."'";
      		}
			$imporcom=mysqli_query($cone,$quecom);
			$filacom=mysqli_fetch_assoc($imporcom);
			$rellcom="";
			while($filacom)
			{
				$idus=$filacom['id_usuario'];
				$quecomu="SELECT usuario.nombre_usuario FROM publicacion JOIN usuario ON usuario.id_usuario=publicacion.id_usuario WHERE usuario.id_usuario='".$idus."'";

				$imporcomu=mysqli_query($cone,$quecomu);
				$filacomu=mysqli_fetch_assoc($imporcomu);

				$rellcom=$rellcom."<div class='collapsible-body'><h1>".$filacomu['nombre_usuario'].":"."</h1><span>".$filacom['texto_comentario']."<p>".$filacom['tiempo_comentario']."</p></span></div>";
        		$filacom=mysqli_fetch_assoc($imporcom);
			}
			$rell=$rell.$rellcom."
    </li>
  </ul>
              	<div class='row'>
        <div class='row'>
          <div class='input-field col s6'>
            <input id='input_text' type='text' data-length='30' onblur='sendi(".$fila['id_publicacion'].")'>
            <label for='input_text'>Comentar</label>
          </div>
        </div>
        </div>
            </div>
        </div>";

		$fila=mysqli_fetch_assoc($impor);
	}
	echo $rell;
}
?>
