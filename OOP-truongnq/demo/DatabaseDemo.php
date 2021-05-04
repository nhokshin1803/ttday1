<?php
include "../dao/Database.php";
class DatabaseDemo{
    //methods 
    public Database $db;
    function __construct() {
        $this->db = new Database();
    }

    function insertTableTest() {
        $this->db->insertTable("product", "Truong");
        $this->db->insertTable("product", "An");
        $this->db->insertTable("product", "Nghia");
    }
    
    function selectTableTest() {
        $this->db->selectTable("product");
        $this->db->selectTable("accessory");
        $this->db->selectTable("category");
    }

    function updateTableTest() {
        $this->db->updateTable("product", 1);
    }

    function deleteTableTest() {
        $this->db->deleteTable("product", 1);
    }

    function truncateTableTest() {
        $this->db->truncateTable("product");
    }

    function initDatabase() {
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");
        $this->db->insertTable("product", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("accessory", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
        $this->db->insertTable("category", "ABC");        
    }
}
$dbD = new DatabaseDemo();
$dbD->insertTableTest();
$dbD->selectTableTest();
$dbD->initDatabase();
$dbD->selectTableTest();

?>