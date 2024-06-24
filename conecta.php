<?php
$servername="localhost";
$database="dashboard";
$username ="root";
$password="";

$conn =mysqli_connect($servername,$username,$password,$database,);

if(!$conn) {
    die("conexao falou.Erro: " . mysqli_connect_error());
}
?>