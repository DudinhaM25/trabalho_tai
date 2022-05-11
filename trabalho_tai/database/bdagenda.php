<?php

class BD
{

    private $host = "localhost";
    private $dbname = "trabalho_avaliativo";
    private $port = 3306;
    private $usuario = "root";
    private $senha = "";
    private $db_charset = "utf8";

    public function conn()
    {
        $conn = "mysql:host=$this->host;
            dbname=$this->dbname;port=$this->port";

        return new PDO(
            $conn,
            $this->usuario,
            $this->senha,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]
        );
    }
    public function select()
    {
        $conn = $this->conn();
        $st = $conn->prepare("SELECT * FROM agenda");
        $st->execute();

        return $st;
    }

    public function inserir($dados)
    {
        $conn = $this->conn();
        $sql = "INSERT INTO agenda (id, titulo, data_inicio, hora_inicio, data_fim, hora_fim, local, descrição ) value (?, ?, ?, ?, ?, ?, ?, ?)";

        $st = $conn->prepare($sql);
        $arrayDados = [$dados['nome'], $dados['sobrenome'], $dados['telefone01'], $dados['tipo_telefone01'], $dados['telefone02'], $dados['tipo_telefone02'], $dados['email']];
        $st->execute($arrayDados);

        return $st;
    }

    public function update($dados)
    {
        $conn = $this->conn();
        $sql = "UPDATE agenda SET titulo= ?, dia_inicio= ?, hora_inicio= ?, data_fim= ?, hora_fim= ?, local= ?, descrição= ?
                 WHERE id = ?";

        $st = $conn->prepare($sql);
        $arrayDados = [
            $dados['titulo'], $dados['data_inicio'],
            $dados['hora_inicio'], $dados['data_fim'],
            $dados['hora_fim'], $dados['local'],
            $dados['descricao'], $dados['id'],
        ];
        $st->execute($arrayDados);

        return $st;
    }

    public function remover($id)
    {
        $conn = $this->conn();
        $sql = "DELETE FROM agenda WHERE id = ?";

        $st = $conn->prepare($sql);
        $arrayDados = [$id];
        $st->execute($arrayDados);

        return $st;
    }

    public function buscar($id)
    {
        $conn = $this->conn();
        $sql = "SELECT * FROM agenda WHERE id = ?";

        $st = $conn->prepare($sql);
        $arrayDados = [$id];
        $st->execute($arrayDados);

        return $st->fetchObject();
    }

    public function pesquisar($dados)
    {
        $conn = $this->conn();
        $sql = "SELECT * FROM agenda WHERE nome LIKE ?;";

        $st = $conn->prepare($sql);
        $arrayDados = ["%" . $dados["nome"] . "%"];
        $st->execute($arrayDados);

        return $st;
    }
}
