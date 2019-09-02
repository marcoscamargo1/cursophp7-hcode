<?php


class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario): void
    {
        $this->idusuario = $idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin): void
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha): void
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro): void
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function loadById($id) // listar um dado específico
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public static function getList()  // trazer lista de usuarios
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login) // buscar por login, apenas parte do nome
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH
        ORDER BY deslogin", [
            ':SEARCH' => "%".$login."%" // pegar parte do nome
        ]);
    }

    public function login($login, $password) // buscar lista de usuários autenticados
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", [
            ":LOGIN" => $login,
            ":PASSWORD" => $password
        ]);

        if (count($results) > 0) {
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou Senha inválidos");
        }
    }

    public function insert() // inserção de dados usando procedure
    {
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", [
           ':LOGIN' => $this->getDeslogin(),
           ':PASSWORD' => $this->getDessenha()
        ]);

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();
        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE
        idusuario = :ID", [
           ':LOGIN' => $this->getDeslogin(),
           ':PASSWORD' => $this->getDessenha(),
            ':ID' => $this->getIdusuario()
        ]);
    }

    public function delete()
    {
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", [
            ':ID' => $this->getIdusuario()
        ]);

        // zerar dados do objeto, já que foi apagado do banco
        // tb pode ser passado valor null
        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    public function __construct($login = "", $password = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}