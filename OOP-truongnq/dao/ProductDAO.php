<?php 
require_once "../entity/Product.php";
require_once "../dao/Database.php";

class ProductDAO {
    public Database $db;

    //methods

    function __construct() {
        $this->db = new Database();
    }

    function insert($row) {
        $this->db->insertTable("product", $row);
    }

    function update($row) {
        $this->db->updateTable("product", $row);
    }

    function delete($row) {
        $this->db->deleteTable("product", $row);
    }

    function findAll(){
        $this->db->selectTable("product");
    }

    function findById($id) {
        for($i = 0; $i < sizeof($this->db->productTable); $i++) {
            if($this->db->productTable[$i]->get_id() == $id) {
                return $this->db->productTable[$i];
            }
        }        
    }

    function findByName($name) {
        for($i = 0; $i < sizeof($this->db->productTable); $i++) {
            if($this->db->productTable[$i]->get_name() == $name) {
                return $this->db->productTable[$i];
            }
        }        
    }

    function search($where) {
        for($i = 0; $i < sizeof($this->db->productTable); $i++) {
            if($where == $i) {
                return $this->db->productTable[$i];
            }
        }   
    }

}
?>