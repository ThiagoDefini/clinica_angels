<!DOCTYPE html>
<?php
session_start();
if(isset ($_SESSION['admin']) && $_SESSION['admin']){

    include_once 'dao/clsConexao.php';
    include_once 'dao/clsClienteDAO.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Clientes</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Clientes</h1>
        
        <br><br><br>
        
        <a href="frmCliente.php"> <button>Cadastrar novo cliente</button></a>
        
            <br><br>
            
             <?php
                $lista = ClienteDAO::getClientes();
            
                    if( $lista ->count()==0){
                        echo '<h2><b>Nenhum cliente cadastrado</b></h2>';
                    } else {
                
            ?>
            
            <table border="2">
            <tr>
                <th>Código</th>
                <th>Nome do Cliente</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php
                foreach ($lista as $cli){
                        echo ' <tr> ';
                        echo ' <td>'.$cli->getId().'</td>';
                        echo ' <td>'.$cli->getNome().'</td>';
                        echo ' <td>'.$cli->getCPF().'</td>';
                        echo ' <td>'.$cli->getTelefone().'</td>';
                        echo ' <td>'.$cli->getEmail().'</td>';
                        if( $cli->getSexo() == "f")
                            echo ' <td>Feminino</td>';
                        else
                            echo '<td>Masculino</td>';
                        echo '<td>
                                <a href="frmCliente.php?editar&idCliente='.$cli->getId().'">
                                <button>Editar</button></a>
                            </td>';
                        echo '<td>
                                <a href="controller/salvarCliente.php?excluir&idCliente='.$cli->getId().'">
                                <button>Excluir</button></a>
                            </td>';
                                
                        echo '</tr>';
                    }
            ?>

        </table>
            
        <?php
            }
        ?>    
            
    </body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>