<?php
    
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Página Inicial</title>
        <link href="estilos.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
      
        <div id="top">
        
        <h1 align="center">Clinica Angels</h1> 
        
        <a id="cadastrocss" href="FrmCliente.php">Cadastre-se</a>
        
        <div id="logincss">
        <form action="entrar.php" method="POST"/> 
        
        <input id="barra1" type="text" name="txtLogin" required placeholder="E-mail ou CPF" />

        <input id="barra1" type="password" name="txtSenha" placeholder="Senha" required />
        
        </div>
        <input id="entrarcss" type="submit" value="Entrar"/>
        
        <br>
        </div>
        
        <?php        
        require_once 'menu.php';    
        ?>
        
        <div id="app">
            <a href="https://play.google.com/store?hl=pt_BR"><img width="50px" height="50px" src="fotos_site/app-icone.png"/></a>
        </div>

        <div id="app_letras">
        <a href="https://play.google.com/store?hl=pt_BR"><h2>Baixe nosso App</h2></a>
        </div>
        <br><br>

        <br>  
        
    </body>
</html>
