<?php
require_once "../dao/Database.php";
class DatabaseDemo {
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
    }

    function updateTableTest() {
        $this->db->updateTableById(2, new Product(1,"Anh"));
    }

    function deleteTableTest() {
        $this->db->deleteTable("product", 1);
    }

    function truncateTableTest() {
        $this->db->truncateTable("product");
    }

    function initDatabase() {
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));
        $this->db->insertTable("product", new Product(1,"A"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("accessory", new Accessory(1,"B"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
        $this->db->insertTable("category", new Accessory(1,"C"));        
    }
}
$dbD = new DatabaseDemo();
$dbD->insertTableTest();
$dbD->selectTableTest();
$dbD->updateTableTest();
$dbD->selectTableTest();
?>