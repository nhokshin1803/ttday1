<?php 
require_once "../entity/ 
0.php";
require_once "../dao/Database.php";

class CategoryDAO {
    public Database $db;

    //methods

    function __construct() {
        $this->db = new Database();
    }

    function insert($row) {
        $this->db->insertTable("category", $row);

    }

    function update($row) {
        $this->db->updateTable("category", $row);
    }

    function delete($row) {
        $this->db->deleteTable("category", $row);
    }

    function findAll(){
        $this->db->selectTable("category");
    }

    function findById($id) {
        for($i = 0; $i < sizeof($this->db->categoryTable); $i++) {
            if($this->db->categoryTable[$i]->get_id() == $id) {
                return $this->db->categoryTable[$i];
            }
        }        
    }

}
?>