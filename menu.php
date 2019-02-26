<?php    
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<header align="center">
    
    <a href="index.php">
        <button>Início</button></a>
    <a href="planos.php">
        <button>Planos</button></a>
    <a href="procedimentos.php">
        <button>Procedimentos</button></a>
    <a href="aplicativo.php">
        <button>Aplicativo</button></a>
    <a href="sac.php">
        <button>Sac</button></a>
    
    <?php
            if(isset($_SESSION['logado']) && ($_SESSION['logado']) == TRUE){
        ?>
    
    <header align="center">
        <a href="consultas.php"><button>Consultas</button></a>
    </header>
    <?php
                echo 'Bem-vindo, '.$_SESSION['nome'].'    ';
                echo '<a href="sair.php"><button>Sair</button></a>';
            }else{
        ?>
    

        <?php
            }
        ?>
    
    </header>