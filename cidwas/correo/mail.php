<?php
    $nombre=$_POST['name'];
    $correo=$_POST['email'];
    $asunto=$_POST['subject'];
    $mensaje=$_POST['mensa'];
    $MiCorreo='facerero@gmail.com';
    $cabeceras_adicionales="MIME-Version 1.0 \r\n";
    $cabeceras_adicionales= "FROM:".$nombre."<".$correo.">";

mail($MiCorreo,$asunto,$mensaje, $cabeceras_adicionales);

if(mail($MiCorreo,$asunto,$mensaje, $cabeceras_adicionales))
{
  echo "Datos enviados correctamente";
}
else
    echo "se ha producido un error";
?>