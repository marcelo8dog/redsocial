<?php
$usuario=$_POST['usu'];
$contrasena=$_POST['cont'];
          $conn=mysqli_connect('localhost','root','','javascript');
          if($conn)
			    {
    					$verificar_usuario = mysqli_query($conn,"SELECT * FROM usuario WHERE nombre_usuario = '".$usuario."';");
    					$numUsu=mysqli_num_rows($verificar_usuario);
    					if($numUsu==1)
    					{
                echo"Bien";
    						$verificar_contra = mysqli_query($conn,"SELECT * FROM usuario WHERE password = '".$contrasena."';");
    						$numCon=mysqli_num_rows($verificar_contra);
    						if($numCon==0)
    						{
    						}
    						else
    						{

    						}
    					}
              if($numUsu==0)
              {
                echo "El usuario no está registrado";
              }
          }
			    else
          {

          }
?>
