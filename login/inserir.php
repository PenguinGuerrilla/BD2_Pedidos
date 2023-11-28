<?php
session_start();
if (empty($_POST) or (empty($_POST["login"]) or (empty($_POST["senha"])))){
    print "<script>location.href='cadastrar.php';</script>";
}
include('config.php');
$date = new DateTime($dateString);
$formattedDate = $date->format('Y-m-d');
$login = $_POST["login"];
$senha =  $_POST["senha"];
$crypt = md5($senha);
$sql = "INSERT INTO adm(login,senha) VALUES ('$login', '$crypt')";
$res = $conn->query($sql) or die($conn->error);
print "<script>alert('Usuário cadastrado com sucesso!');</script>";
print "<script>location.href='index.php'</script>";
exit;