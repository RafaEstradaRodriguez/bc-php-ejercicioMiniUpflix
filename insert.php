<?php

$titulo = $_POST['titulo'];
$sinopsis = $_POST['sinopsis'];


$dir_subida = 'uploads/';

if(!is_dir($dir_subida)){
    mkdir($dir_subida);
}
$foto = $dir_subida . basename($_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'], $foto);


/*echo $titulo."<br>".$sinopsis."<br>".$foto."<br>";*/

$foto = str_replace("\\", "\\\\", $foto);

/*echo $titulo."<br>".$sinopsis."<br>".$foto."<br>";*/

$mysqli = new mysqli("localhost", "root", "", "peliculas", 3306);
if ($mysqli->connect_errno) {
    echo "Error al conectar con MySQL";
} else {
    $query = "INSERT INTO pelis (titulo, sinopsis, foto) VALUES ('$titulo', '$sinopsis', '$foto')";
    $res = $mysqli->query($query);
    if ($res) {
        echo "Se ha insertado correctamente la película $titulo.<br>";
    }
}