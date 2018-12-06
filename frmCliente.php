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
        require_once 'menu.php';    
        ?>
        
        <br><br><br>
        
        <label>Nome: </label>
        <input type="text" name="txtNome" required maxlength="100" placeholder="Insira seu nome aqui"/> <br><br>
        
        <label>Telefone: </label>
        <input type="text" name="txtNome" required maxlength="100" placeholder="Digitos do número"/> <br><br>
        
        <label>E-mail: </label>
        <input type="email" name="txtNome" required maxlength="100" placeholder="Endereço de E-mail"/> <br><br>
        
        <label>CPF: </label>
        <input type="text" name="txtNome" required maxlength="100" placeholder="Cadastro de Pessoa Física"/> <br><br>
        
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
