<?php
if ($_GET["token"] == "pamsexy") {
$id=$_GET['id'];
header ("Content-Type: application/x-mpegURL; charset=UTF-8");
header("HTTP/1.1 302 Found"); 
header('Location: http://192.168.100.19:8096/emby/videos/' .$id. '/stream.mp4?api_key=fd6371be47f340099a44e8e79c6a1c23');
} else {
//Aqui pones el codigo de los eventos que ocurriran si la contraseña es incorrecta o si el usuario es incorrecto.
echo $_GET["user"] . ' Denied access.';
}
?>