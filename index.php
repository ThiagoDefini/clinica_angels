<?php
    
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Página Inicial</title>
        
    </head>
    
    <body>
      
    <body style="background-image: url('fotos_site/background.jpg.jpg'); "/>
        <br>
        <h1 align="center">Clinica Angels</h1> 

        <header align="center">
        <form action="entrar.php" method="POST" > 
        <input type="text" name="txtLogin" required placeholder="E-mail ou CPF: " />

        <input type="password" name="txtSenha" placeholder="Senha: " required />  
        
        <input type="submit" value="Entrar" />
        </form>
        <br>
        <a href="FrmCliente.php">
            <button>Cadastre-se</button></a>
        </header>

        <hr><br>       
        
        <?php        
        require_once 'menu.php';    
        ?>

        <br><br>

        <br>
        
     <h3 align="center">Sobre</h5>
        <h4 align="center">Bem vindo a Clinica Angels</h4>
        
        
        
        
    </body>
</html>
