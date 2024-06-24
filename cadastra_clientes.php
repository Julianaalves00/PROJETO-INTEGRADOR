<?php
require("conecta.php");

$nome =$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone =$_POST['telefone'];
$dataDeNascimento =$_POST['dataDeNascimento'];
$cpf= $_POST['cpf'];
$email =$_POST['email'];
$tamanho =$_POST['TAMANHO'];

$sql ="INSERT INTO loja (nome,sobrenome,telefone,,dataDeNascimento,cpf,email,tamanho) values ('$nome,$sobrenome,
$telefone,$dataDeNascimento,$cpf,$email,'tamanho'";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Registro Inserido com Sucesso</h1>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
  } else {
    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
  }
  ?>


