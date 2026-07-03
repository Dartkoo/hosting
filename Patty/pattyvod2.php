<?php
if ($_GET["token"] == "pamsexy") {
$id=$_GET['id'];
header ("Content-Type: application/x-mpegURL; charset=UTF-8");
header("HTTP/1.1 302 Found"); 
header('Location: https://dl.dropboxusercontent.com/s/tg38ujegud20uin/' .$id. '.mp4');
} else {
//Aqui pones el codigo de los eventos que ocurriran si la contraseña es incorrecta o si el usuario es incorrecto.
echo $_GET["user"] . ' Denied access.';
}
?>