<?php

function putUser($id, $data, $config)
{
    
    // Conectarse al DBMS
    $link = mysqli_connect($config['host'],
                            $config['user'],
                            $config['password']
                            );

    
    // Crear la consulta
    $query = "UPDATE user SET
					 name = '".$data['name']."',
                     email='".$data['email']."',
					 password='".$data['password']."',
                     description='".$data['description']."',           
                     gender_idgender='".$genders[$data['gender']]."',
                     city_idcity='".$cities[$data['city']]."',
                     WHERE iduser='".$id."',";
    

    // Enviar la consulta
    $result = mysqli_query($link, $query);
    
    // Cerra la coneccion
    mysqli_close($link);
    
     
    return true;
}