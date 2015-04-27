<?php
function getUser($id, $config)
{

    // Conectarse al DBMS
    $link = mysqli_connect($config['host'],
                            $config['user'],
                            $config['password']
                            );
    
    // Seleccionar la DB
    mysqli_select_db($link, $config['database']);
    
    // Crear la consulta
    $query = "SELECT * FROM user WHERE iduser = $id";
    
    // Enviar la consulta
    $result = mysqli_query($link, $query);
    
    // Tomar los datos del usuario
    $user = mysqli_fetch_assoc($result);
    
    // Cerra la coneccion
    mysqli_close($link);
    
    return $user;
}