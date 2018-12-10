<?php
    include_once '../dao/clsClienteDAO.php';
    include_once '../dao/clsConexao.php';
    include_once '../model/clsCliente.php';
    if ( isset($_REQUEST['inserir']) ){
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtConfirmaSenha'];
    
    if( $senha != $senhaConfirma ){
        echo "<body onload='window.history.back();'>";
    }else{
    
        $cliente = new Cliente();
        $cliente->setNome( $_POST['txtNome'] );
        $cliente->setTelefone( $_POST['txtTelefone'] );
        $cliente->setEmail( $_POST['txtEmail'] );
        $cliente->setCpf( $_POST['txtCPF'] );               
        $cliente->setSexo($_POST['rbSexo']);        
        $senha = md5($senha);
        $cliente->setSenha( $senha );
        
        ClienteDAO::inserir($cliente);
    
        header("Location: ../clientes.php");
    }
    
    if( isset($_REQUEST['confirmaExcluir']) ){
    $id = $_REQUEST['idCliente'];
    $cliente = new Cliente();
    $cliente = ClienteDAO::getClienteById($id);
    
    ClienteDAO::excluir($cliente);
    
    header("Location: ../clientes.php");
   
    
    }
    }