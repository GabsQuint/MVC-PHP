<?php

require_once "config/database.php";

class FornecedorRepository {
    private $conexao;

    public function __construct() {

        $this->conexao = getConnection();
    }
    
    public function insert(FornecedorModel $model) {
        $sql = "INSERT INTO db_mvc.tbl_forn (nm_forn, cnpj, UF) VALUES (?,?,?)";

        $stmt = $this->conexao->prepare($sql);  
        
        $stmt->bindValue(1, $model->nm_forn);
        $stmt->bindValue(2, $model->cnpj);
        $stmt->bindValue(3, $model->UF);

        $stmt->execute();
    }

    public function update(FornecedorModel $model) {
        $sql = "UPDATE db_mvc.tbl_forn SET nm_forn = ?, cnpj = ?, UF = ? where id_forn = ?";

        $stmt = $this->conexao->prepare($sql);  
        
        $stmt->bindValue(1, $model->nm_forn);
        $stmt->bindValue(2, $model->cnpj);
        $stmt->bindValue(3, $model->UF);
        $stmt->bindValue(4, $model->id_forn);

        $stmt->execute();
    }

    public function select() {
        $sql = "SELECT * FROM db_mvc.tbl_forn";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $result;
    }

    public function selectByID(int $id) {
        include_once "models/fornecedor.php";

        $sql = "SELECT * FROM db_mvc.tbl_forn WHERE id_forn = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $result = $stmt->fetchObject("FornecedorModel"); 

        return $result;
    }

    public function delete(int $id) {
        $sql = "DELETE FROM db_mvc.tbl_forn WHERE id_forn = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}