<?php

class Usuario {

    private $id;
    private $login;
    private $senha;
    private $data_cadastro;

    public function getId() {
        return $this->id;
    }
    public function setId($value) {
        $this->id = $value;
    }
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($value) {
        $this->login = $value;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($value) {
        $this->senha = $value;
    }
    public function getDataCadastro() {
        return $this->data_cadastro;
    }
    public function setDataCadastro($value) {
        $this->data_cadastro = $value;
    }

    public function buscaId($id) {

        $sql = new sql();

        $retorno = $sql->select("select * from tb_usuarios where id = :ID", array(
            ":ID" => $id
    ));
    if (count($retorno) > 0) {

        $row = $retorno[0];
        $this->setId($row['id']);
        $this->setLogin($row['login']);
        $this->setSenha($row['senha']);
        $this->setDataCadastro(new DateTime($row['data_cadastro']));
        }
    }
    public function __construct($login = "", $senha = ""){

        $this->setLogin($login);
        $this->setSenha($senha);
    }
    public function __toString() {

        return json_encode(array(
            "id"=>$this->getId(),
            "login"=>$this->getLogin(),
            "senha"=>$this->getSenha(),
            "data_cadastro"=>$this->getDataCadastro()->format("d/m/Y")
        ));
    }

    public static function lista() {

        $sql = new Sql();
        return $sql->select("select * from tb_usuarios order by login");
    }

    public static function busca($login) {

        $sql = new Sql();
        return $sql->select("select * from tb_usuarios where login like :LOGIN order by login", array(
            ':LOGIN'=>"%".$login."%"
        ));

    }

    public function login($login, $senha) {

        $sql = new sql();

        $retorno = $sql->select("select * from tb_usuarios where login = :LOGIN and senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA"=>$senha
        ));
        if (count($retorno) > 0) {

            $row = $retorno[0];
            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDataCadastro(new DateTime($row['data_cadastro']));
        }else
            throw new Exception("Login e/ou senha inválidos");

    }

    public function novo() {

        $sql = new Sql();

        $resultado = $sql->select("CALL sp_usuarios_insert(:LOGIN,:SENHA)", array(
            ":LOGIN"=> $this->getLogin(),
            ":SENHA"=> $this->getSenha()
        ));

        if (count($resultado) > 0) {
            $row = $resultado[0];
            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDataCadastro(new DateTime($row['data_cadastro']));
        }else
            throw new Exception("Registro não foi salvo!");
        }

    public function update($login, $senha){

        $this->setLogin($login);
        $this->setSenha($senha);

        $sql = new Sql();

        $sql->sqlQuery("update tb_usuarios set login = :LOGIN, senha = :SENHA where id = :ID", array(
            ":LOGIN"=> $this->getLogin(),
            ":SENHA"=> $this->getSenha(),
            ":ID"=> $this->getId()
        ));

    }
}

