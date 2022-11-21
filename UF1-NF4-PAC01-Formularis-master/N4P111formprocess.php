<?php 
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//create the movie table
$query = 'CREATE TABLE valoration (
        user_id        INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        user_name      VARCHAR(255)      NOT NULL,
        user_movie_id INTEGER NOT NULL, 
        comments      VARCHAR(500) NOT NULL, 
        rate INTEGER UNSIGNED  NOT NULL DEFAULT 0, 

        PRIMARY KEY (user_id)
    ) 
    ENGINE=MyISAM';
mysqli_query($db,$query) or die (mysqli_error($db));
echo "Data created"
//Acabar practica tables y cargar en pagina detalles


?>
