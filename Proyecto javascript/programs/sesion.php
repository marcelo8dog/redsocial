<?php
  $usu=$_POST['usuario'];
  $cont=$_POST['contra'];
          $conn=mysqli_connect('localhost','root','','javascript');
          if($conn)
			    {
    					$verificar_usuario = mysqli_query($conn,"SELECT * FROM usuario WHERE nombre_usuario = '".$usu."';");
    					$numUsu=mysqli_num_rows($verificar_usuario);
    					if($numUsu==1)
    					{
    						$verificar_contra = mysqli_query($conn,"SELECT * FROM usuario WHERE password = '".$cont."';");
    						$numCon=mysqli_num_rows($verificar_contra);
    						if($numCon==1)
    						{
                  echo "BIENVENIDO";
                  /*$query1='SELECT * FROM usuario';
          				$res1=mysqli_query($conn,$query1);
          				$fila1=mysqli_fetch_assoc($res1);
                  $x=0;
                  while($fila1)
          				{
          					$nusuario[$x]=$fila['nombre_usuario'];
                    $x++;
                    $fila1=mysqli_fetch_assoc($res1);
          				}*/
    						}
    						else
    						{

                  echo "La contraseña no es correcta";
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
