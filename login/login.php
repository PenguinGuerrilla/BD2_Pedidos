<?php
session_start();
if (empty($_POST) or (empty($_POST["login"]) or (empty($_POST["senha"])))) {
    print "<script>location.href='index.php';</script>";
}
include('config.php');
$usuario = $_POST["login"];
$pwd =  md5($_POST["senha"]);
$sql = "SELECT * FROM adm where login = '{$usuario}'";
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;
if ($row->senha == $pwd) {
    print "<script>location.href='../idex.php'</script>";
} else {
    print "<script>alert('Usuário e/ou senha incorreto(s)')</script>";
    print "<script>location.href='index.php'</script>";
    
}
