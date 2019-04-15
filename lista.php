<?php
include_once 'dao/clsConexao.php';

$consulta = "SELECT nome, telefone, cpf, horario FROM consultas";
$con = mysqli->query($consulta) or die($mysqli->error);
 ?>

 <html>
   <head>
     <meta charset="utf-8">
     <title>Lista de Consultas</title>
   </head>
   <body>
      <table border="1">
        <tr>
          <td>Nome</td>
          <td>Telefone</td>
          <td>CPF</td>
          <td>Horário</td>
          <td>Opções</td>
        </tr>
        <?php while ($dado = $con->fetch_array()) {

        } ?>
        <tr>
          <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["telefone"]; ?></td>
            <td><?php echo $dado["cpf"]; ?></td>
            <td><?php echo $dado["horario"]; ?></td>
            <td><a href="lista_editar.php?codigo=">Editar</a>
                <a href="lista_excluir.php?codigo=">Excluir</a></td>
          </tr>
      </table>


   </body>
 </html>
