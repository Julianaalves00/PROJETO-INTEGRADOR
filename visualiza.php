<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualiza</title>
</head>
<body>
    <center>
        <h1>   cadastro clientes</h1>

        <table border="4">
            <TR>
            <td>Nome</td>
            <td>SOBRENOME</td>
            <TD>EMAIL</td>
            </TR>
          <?php
          require("conecta.php");

          $dados_select= mysqli_query($conn,"SELECT NOME, SOBRENOME, EMAIL FROM  loja" );
          
          while ($dado = mysqli_fetch_array($dados_select)){
            echo '<tr>';
            echo '<td>'.$dado[0]. '</td>';
            echo '<td>' .$dado[1]. '</td>';
            echo '<td>'.$dado[2]. '</td>';
            echo '</tr>';
        }
            ?>

</table>
<br/>
<a href="index.html"> <input type="button" value="voltar"> </a>
</center>
    
</body>
</html>