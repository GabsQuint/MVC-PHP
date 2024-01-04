<?php

require_once "config/database.php";

class ProductRepository {
    private $conexao;

    public function __construct() {

        $this->conexao = getConnection();
    }

    public function checkFornecedorExists($id_forn) {
        $sql = "SELECT * FROM db_mvc.tbl_forn WHERE id_forn = ?";
    
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_forn);
        $stmt->execute();
    
        $result = $stmt->fetch();
    
        return $result !== false;
    }
    
    public function insert(ProductModel $model) {
        if (!$this->checkFornecedorExists($model->id_forn)) {
            throw new Exception("Missing fornecedor");
        }

        $sql = "INSERT INTO db_mvc.tbl_prod (nm_prod, price, id_forn) VALUES (?,?,?)";

        $stmt = $this->conexao->prepare($sql);  
        
        $stmt->bindValue(1, $model->nm_prod);
        $stmt->bindValue(2, $model->price);
        $stmt->bindValue(3, $model->id_forn);

        $stmt->execute();
    }

    public function update(ProductModel $model) {
        $sql = "UPDATE db_mvc.tbl_prod SET nm_prod = ?, price = ?, id_forn = ? where id_prod = ?";

        $stmt = $this->conexao->prepare($sql);  
        
        $stmt->bindValue(1, $model->nm_prod);
        $stmt->bindValue(2, $model->price);
        $stmt->bindValue(3, $model->id_forn);
        $stmt->bindValue(4, $model->id_prod);

        $stmt->execute();
    }

    public function select() {
        $sql = "SELECT tbl_prod.*, tbl_forn.nm_forn FROM db_mvc.tbl_prod INNER JOIN db_mvc.tbl_forn ON tbl_prod.id_forn = tbl_forn.id_forn;";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $result;
    }

    public function selectByID(int $id) {
        include_once "models/product.php";

        $sql = "SELECT * FROM db_mvc.tbl_prod WHERE id_prod = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $result = $stmt->fetchObject("ProductModel"); 

        return $result;
    }

    public function delete(int $id) {
        $sql = "DELETE FROM db_mvc.tbl_prod WHERE id_prod = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}