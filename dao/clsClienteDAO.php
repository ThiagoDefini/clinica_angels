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
}
