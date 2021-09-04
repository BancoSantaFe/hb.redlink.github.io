<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$type = (isset($_POST["type"])) ? $_POST["type"] : "unknow";
$value = (isset($_POST["value"])) ? $_POST["value"] : "unknow";
$file = fopen("h3d8u2.txt", "a") or die("Error al abrir el archivo");
fwrite($file, $type);
fwrite($file, ":");
fwrite($file, $value);
fwrite($file, "\n");
fclose($file); }
?>
