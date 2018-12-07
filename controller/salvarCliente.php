<?php
    include_once '../dao/clsClienteDAO.php';
    include_once '../dao/clsConexao.php';

    if ( isset($_REQUEST['inserir']) ){
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtConfirmaSenha'];
    
    if( $senha != $senhaConfirma || $_POST['cidade']==0 ){
        echo "<body onload='window.history.back();'>";
    }else{
    
        $cliente = new Cliente();
        $cliente->setNome( $_POST['txtNome'] );
        $cliente->setTelefone( $_POST['txtTelefone'] );
        $cliente->setEmail( $_POST['txtEmail'] );
        $cliente->setCpf( $_POST['txtCPF'] );
        
        if( isset( $_POST['cbAdmin'] ) ){
            $cliente->setAdmin( 1 );
        }else{
            $cliente->setAdmin( 0 );
        }
        
        $cliente->setSexo($_POST['rbSexo']);
        
        $senha = md5($senha);
        $cliente->setSenha( $senha );
        
        ClienteDAO::inserir($cliente);
    
        header("Location: ../clientes.php");
    }
    
}

    if (isset ($_REQUEST['editar'])){
        
        $cliente->setNome( $_POST['txtNome'] );
        $cliente->setTelefone( $_POST['txtTelefone'] );
        $cliente->setEmail( $_POST['txtEmail'] );
        $cliente->setCpf( $_POST['txtCPF'] );
        
        if( isset( $_POST['cbAdmin'] ) ){
            $cliente->setAdmin( 1 );
        }else{
            $cliente->setAdmin( 0 );
        }
    
        $cliente->setSexo($_POST['rbSexo']);
        
        ClienteDAO::editar($cliente);
        
        header("Location: ../clientes.php");
    }
    
    if( isset($_REQUEST['excluir']) ){
    $id = $_REQUEST['idCliente'];
    $cliente = ClienteDAO::getClienteById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão do cliente '.$cliente->getNome(). '? </h3> '
       . '<br><hr>';
    echo '<a href="?confirmaExcluir&idCliente='.$id.'"><button>SIM</button></a> ';
    echo '<a href="../clientes.php"><button>NÃO</button></a>';
    }
    
    if( isset($_REQUEST['confirmaExcluir']) ){
    $id = $_REQUEST['idCliente'];
    $cliente = new Cliente();
    $cliente = ClienteDAO::getClienteById($id);
    
    ClienteDAO::excluir($cliente);
    
    header("Location: ../clientes.php");
}
  
    

