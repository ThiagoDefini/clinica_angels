<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Página Inicial</title>
    </head>
    <body>
        
        <div style="text-align: right">
        <h1 align="center">Clinica Angels</h1> 
        
        <header align="center">
        <form action="entrar.php" method="POST" >
        <input type="text" name="txtLogin" required placeholder="E-mail ou CPF: " />
        
        <input type="password" name="txtSenha" placeholder="Senha: " required />  
        
        <input type="submit" value="Entrar" />
        </form></header>
        </div>
        <hr><br>       
        
        <?php        
        require_once 'menu.php';    
        ?>
        
        <br><br>
               
        
        
        <br>
        
        <header align="center">
            <a href="FrmCliente.php">
                 <button>Cadastre-se</button></a>
        </header>
        
        <h3 align="center">Sobre</h5>
        <h4 align="center">Escreva aqui coisas sobre a Angel Clinicas</h4>
        
        
        
        
    </body>
</html>
