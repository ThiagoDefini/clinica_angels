<?php
    session_start();
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'model/clsCliente.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Marcar Consulta</title>
        <link href="estilos2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="top_consultas">
        
            <h1 align="center" id="titulo_consultas">Clinica Angels</h1> 
        
            </div>
     
        
        <?php
            require_once 'menu.php';
        ?>
        
        
        <br><br>
        
        
    <div id="area_formulario">
        
        <form id="formulario" autocomplete="off">
            <fieldset>
            <label>Nome: </label>
            <input class="campo_nome"type="text" name="txtNome" required maxlength="100" placeholder="Insira o nome aqui"/> <br><br>
        
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" required maxlength="100" placeholder="Digite o telefone"/> <br><br>
        
            <label>E-mail: </label>
            <input type="email" name="txtEmail" required maxlength="100" placeholder="Endereço de E-mail"/> <br><br>
        
            <label>CPF: </label>
            <input type="text" name="txtCPF" required maxlength="100" placeholder="111.222.333-00"/> <br><br>
        
            <label>Horários Disponíveis: </label>
            <input type="date" name="txtCPF" required maxlength="100" placeholder="Cadastro de Pessoa Física"/> <br><br>
        
            <label>Médicos Disponíveis: </label>
            <input type="radio" name="rbSexo" value="m" required/> Masculino
            <input type="radio" name="rbSexo" value="f" required/> Feminino <br><br>
        
            <label>Modo de Pagamento: </label>
            <input type="password" name="txtSenha" required maxlength="100" placeholder="Escolha uma senha"/> <br><br>
        
            <input type="submit" name="btn_enviar" value="Marcar"/>
            </fieldset>
        </form>
    </div>
    </body>
</html>
