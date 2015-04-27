<?php


function deleteUser($id, $config)
{
    
    // Conectarse al DBMS
    $link = mysqli_connect($config['host'],
                            $config['user'],
                            $config['password']
                            );
    
    // Seleccionar la DB
    mysqli_select_db($link, $config['database']);
    
    // Crear la consulta
    $query = "DELETE * FROM user WHERE iduser = $id";
    
    // Enviar la consulta
    $result = mysqli_query($link, $query);
    
    // Cerra la coneccion
    mysqli_close($link);
    
    if ($result != FALSE)
    {
        return true;
    }
    else 
    {
        return false;
    }
}