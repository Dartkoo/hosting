<?php
if ($_GET["token"] == "1268") {
$id=$_GET['id'];
header ("Content-Type: application/x-mpegURL; charset=UTF-8");
header("HTTP/1.1 302 Found"); 
header('Location: https://dl.dropbox.com/scl/fi/6iak3znirpbchvhveozkp/SMGLaPelicula-2026.mp4?rlkey=' .$id. '');
} else {
//Aqui pones el codigo de los eventos que ocurriran si la contraseña es incorrecta o si el usuario es incorrecto.
echo $_GET["user"] . ' Denied access.';
}
?>