<?php

class ClienteDAO {
    
    public static function inserir($cliente){
        $sql = "INSERT INTO clientes "
                . "( nome, telefone, cpf, email, senha, sexo, admin ) VALUES "
                . " ( '".$cliente->getNome()."' , "
                . "   '".$cliente->getTelefone()."' , "
                . "   '".$cliente->getCpf()."' , "
                . "   '".$cliente->getEmail()."' , "
                . "   '".$cliente->getSenha()."' , "
                . "   '".$cliente->getSexo()."' , "
                . "    ".$cliente->getAdmin()
                . " ); ";
        
        Conexao::executar($sql);
    }

    public static function editar ($cliente){
        $sql = "UPDATE clientes SET "
                . " nome = '".$cliente->getNome()."' , "
                . " telefone = '".$cliente->getTelefone(). "' , " 
                . " cpf = '".$cliente->getCpf(). "' , " 
                . " email = '".$cliente->getEmail(). "' , " 
                . " sexo = '".$cliente->getSexo(). "' , " 
                . " admin = ".$cliente->getAdmin()."  "
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);
    }
    
    public static function excluir( $cliente ){
        $sql = "DELETE FROM clientes "
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);        
    }
}

