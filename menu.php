<?php    
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
?>
<link href="estilos.css" rel="stylesheet" type="text/css" />

<div id="menucss">
    <a href="index.php">
        <button id="botoescss">Início</button></a>
    <a href="planos.php">
        <button id="botoescss">Planos</button></a>
    <a href="procedimentos.php">
        <button id="botoescss">Procedimentos</button></a>
    <a href="aplicativo.php">
        <button id="botoescss">Aplicativo</button></a>
    <a href="sac.php">
        <button id="botoescss">Sac</button></a>
    
    <?php
            if(isset($_SESSION['logado']) && ($_SESSION['logado']) == TRUE){
        ?>
    
    
        <a href="consultas.php"><button id="botoescss">Consultas</button></a>
   
    </div>

    <?php
                echo 'Bem-vindo, '.$_SESSION['nome'].'    ';
                echo '<a href="sair.php"><button>Sair</button></a>';
            }else{

            }
?>

   