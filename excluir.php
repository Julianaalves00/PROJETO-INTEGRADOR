<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUIR</title>
</head>
<body>
    <?php


$conn= mysqli_connect( "localhost", 'root','root',"loja");
  $nome =$_POST['id'];

  $query ="DELETE FROM loja where id= $id";
  $resultado= mysqli_query($conn,$query);

  if($resultado){
     echo  "<h2> DADOS EXCLUIDOS COM SUCESSO</h2>";
     echo  "<h3><a href= 'cadastrar.php>' Voltar </a></h3>";


  } else{
    "<h2> ERROR</h2>";
     echo  "<h3><a href= 'cadastrar.php>' Voltar </a></h3>";


  }

    ?>
    
</body>
</html>