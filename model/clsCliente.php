<?php

class Cliente {
    private $id, $nome, $telefone, $cpf, $email, $senha, $admin, $sexo;
    
    function __construct($id = NULL, $nome = NULL, $telefone = NULL, $cpf = NULL, $email = NULL, $senha = NULL, $admin = NULL, $sexo = NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->admin = $admin;
        $this->sexo = $sexo;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAdmin() {
        return $this->admin;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }



}