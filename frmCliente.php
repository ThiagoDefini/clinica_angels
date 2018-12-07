<?php
    include_once 'dao/clsClienteDAO.php';
    include_once 'dao/clsConexao.php';
    include_once 'model/clsCliente.php';

    session_start();
    
    $nome = "";
    $telefone = "";
    $email = "";
    $cpf = "";
    $sexo = "";
    $admin = 0;
    $action = "inserir";
    
    if (isset($_REQUEST['editar'])){
        $id = $_REQUEST['idCliente'];
        $cliente = ClienteDAO::getClienteById($id);
        $nome = $cliente->getNome();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $cpf = $cliente->getCpf();
        $sexo = $cliente->getSexo();
        $admin = $cliente->getAdmin();
    }
    
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Formulário de Cadastro</title>
    </head>
    <body>
        
        <h1 align="center">Cadastro</h1>        
        <hr><br>    
        
        <?php        
        require_once './menu.php';    
        ?>
        
        <form action="controller/salvarCliente.php?<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
            <?php
                if(isset($_SESSION['admin'])&& $_SESSION['admin']){
                    if($admin){
                        echo '<input type="checkbox" selected name="cbAdmin"/>';
                    }else{
                        '<input type="checkbox" selected name="cbAdmin"/>';
                    }
                    echo '<label>Admin</label> <br> </br>';
                
            ?>
            
            <input type="checkbox" name="cbAdmin"/>
            <label>Admin</label>
            
            <?php
                }
            ?>
        
        <br><br><br>
        
        <label>Nome: </label>
        <input type="text" name="txtNome" required maxlength="100" placeholder="Insira seu nome aqui"/> <br><br>
        
        <label>Telefone: </label>
        <input type="text" name="txtTelefone" required maxlength="100" placeholder="Digitos do número"/> <br><br>
        
        <label>E-mail: </label>
        <input type="email" name="txtEmail" required maxlength="100" placeholder="Endereço de E-mail"/> <br><br>
        
        <label>CPF: </label>
        <input type="text" name="txtCPF" required maxlength="100" placeholder="Cadastro de Pessoa Física"/> <br><br>
        
        <label>Sexo: </label>
        <input type="radio" name="rbSexo" value="m" required/> Masculino
        <input type="radio" name="rbSexo" value="f" required/> Feminino <br><br>
        
        <label>Senha: </label>
        <input type="password" name="txtSenha" required maxlength="100" placeholder="Escolha uma senha"/> <br><br>
        
        <label>Confirme sua senha: </label>
        <input type="password" name="txtConfirmaSenha" required maxlength="100" placeholder="Digite a senha novamente"> <br><br>
        
        
        <input type="submit" value="Salvar"/>
        <input type="reset" value="Limpar"/>
        
        
    </body>
</html>
