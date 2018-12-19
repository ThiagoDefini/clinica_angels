<?php

class ClienteDAO {
    
    public static function inserir($cliente){
        $sql = "INSERT INTO clientes "
                . "( nome, telefone, cpf, email, senha, sexo) VALUES "
                . " ( '".$cliente->getNome()."' , "
                . "   '".$cliente->getTelefone()."' , "
                . "   '".$cliente->getCpf()."' , "
                . "   '".$cliente->getEmail()."' , "
                . "   '".$cliente->getSenha()."' , "
                . "   '".$cliente->getSexo()."' );";
                   
        Conexao::executar($sql);
    }

    public static function editar ($cliente){
        $sql = "UPDATE clientes SET "
                . " nome = '".$cliente->getNome()."' , "
                . " telefone = '".$cliente->getTelefone(). "' , " 
                . " cpf = '".$cliente->getCpf(). "' , " 
                . " email = '".$cliente->getEmail(). "' , " 
                . " sexo = '".$cliente->getSexo(). "' , " 
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);
    }
    
    public static function excluir( $cliente ){
        $sql = "DELETE FROM clientes "
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);        
    }
public static function logar($login, $senha){
        $sql = "select id, nome from clientes where (email = '".$login."' or "
                ."CPF = '".$login."') "." and senha = '".$senha."' ";
        
        $result = Conexao::consultar($sql);
        
        if (mysqli_num_rows($result) > 0){
            $dados = mysqli_fetch_assoc($result);
            $cliente = new Cliente();
            $cliente-> setId ($dados['id']);
            $cliente-> setNome ($dados['nome']);
            $cliente->setAdmin ($dados['admin']);
            return $cliente;
            
        } else{
            return NULL;
        }
        
    }
 }   