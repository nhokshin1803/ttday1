<?php 
require_once "../entity/Accessory.php";
require_once "../dao/Database.php";

class AccessoryDAO {
    public Database $db;

    //methods
    function __construct() {
        $this->db = new Database();
    }

    function insert($row) {
        $this->db->insertTable("accessory", $row);
    }

    function update($row) {
        $this->db->updateTable("accessory", $row);
    }

    function delete($row) {
        $this->db->deleteTable("accessory", $row);
    }

    function findAll(){
        $this->db->selectTable("accessory");
    }

    function findById($id) {
        for($i = 0; $i < sizeof($this->db->accessoryTable); $i++) {
            if($this->db->accessoryTable[$i]->get_id() == $id) {
                return $this->db->accessoryTable[$i];
            }
        }        
    }

    function findByName($name) {
        for($i = 0; $i < sizeof($this->db->accessoryTable); $i++) {
            if($this->db->accessoryTable[$i]->get_name() == $name) {
                return $this->db->accessoryTable[$i];
            }
        }        
    }

    function search($where) {
        for($i = 0; $i < sizeof($this->db->accessoryTable); $i++) {
            if($where == $i) {
                return $this->db->accessoryTable[$i];
            }
        }   
    }

}
?>