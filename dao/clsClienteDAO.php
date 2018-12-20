<?php

class ClienteDAO {
    
    public static function inserir($cliente){
        $sql = "INSERT INTO clientes "
                . "( nome, telefone, cpf, email, senha, sexo, admin) VALUES "
                . " ( '".$cliente->getNome()."' , "
                . "   '".$cliente->getTelefone()."' , "
                . "   '".$cliente->getCpf()."' , "
                . "   '".$cliente->getEmail()."' , "
                . "   '".$cliente->getSenha()."' , "
                . "   '".$cliente->getSexo()."' ,"
                . "    ".$cliente->getAdmin()." );";
        
                   
        Conexao::executar($sql);
    }

    public static function editar ($cliente){
        $sql = "UPDATE clientes SET "
                . " nome = '".$cliente->getNome()."' , "
                . " telefone = '".$cliente->getTelefone(). "' , " 
                . " cpf = '".$cliente->getCpf(). "' , " 
                . " email = '".$cliente->getEmail(). "' , " 
                . " sexo = '".$cliente->getSexo(). "' , " 
                . " admin = '".$cliente->getAdmin(). "' , " 
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);
    }
    
    public static function excluir( $cliente ){
        $sql = "DELETE FROM clientes "
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar($sql);        
    }
    
    public static function getClientes(){
    	$sql = "SELECT c.id, c.nome, c.telefone, c.cpf,"
                . " c.email, c.foto, c.sexo, c.admin"
                . " FROM clientes c"
                . " ORDER BY c.nome ";
    	$result = Conexao::consultar($sql);
    	$lista = new ArrayObject();    	
    	while(list($cod, $nome, $fone, $cpf, $mail, $sexo, $admin) = mysqli_fetch_row($result)){
            
                        $cliente = new Cliente();
                        $cliente->setId($cod);
                        $cliente->setNome($nome);
                        $cliente->setTelefone($fone);
                        $cliente->setEmail($mail);
                        $cliente->setCpf($cpf);
                        $cliente->setSexo($sexo);
                        $cliente->setAdmin($admin);
                        
    			$lista->append($cliente);
    		}
                return $lista;
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
    public static function getClientesById($id){
    	$sql = "SELECT c.id, c.nome, c.telefone, c.cpf,"
                . " c.email, c.foto, c.sexo, c.filhos, c.admin"
                . " FROM clientes c"
                . " WHERE c.id = ".$id
                . " ORDER BY c.nome ";
    	$result = Conexao::consultar($sql);  	
    	list($cod, $nome, $fone, $cpf, $mail, $sexo, $admin) = mysqli_fetch_row($result);
                        
                $cliente = new Cliente();
                $cliente->setId($cod);
                $cliente->setNome($nome);
                $cliente->setTelefone($fone);
                $cliente->setEmail($mail);
                $cliente->setCpf($cpf);
                $cliente->setCidade($cidade);
                $cliente->setSexo($sexo);
                $cliente->setAdmin($admin);
                        
    	return $cliente;
    }
 }   
 ?>