<?php

    include 'bd.php';

     $nombre=$_POST['nombre'];
     $correo=$_POST['correo'];
     $contraseña=$_POST['contraseña'];


     $query = "INSERT INTO usuarios(nombre,correo,contraseña) 
               VALUES('$nombre','$correo','$contraseña)";

    $ejecutar=mysqli_query($conexion,$query);


?>