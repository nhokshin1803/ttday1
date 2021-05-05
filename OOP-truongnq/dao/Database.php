<?php
require_once "../entity/Product.php";
require_once "../entity/Accessory.php";
require_once "../entity/Category.php";
class Database {
    //properties
    public $productTable = [];
    public $categoryTable = [];
    public $accessoryTable = [];
    //methods
    function __construct() {
        
    }

    function insertTable($name, $row) {
        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if($name == "product") {
            $this->productTable[] = $row;
            return true;
        }

        else if($name == "accessory") {
            $this->accessoryTable[] = $row;
            return true;
        }

        else if($name == "category") {
            $this->categoryTable[] = $row;
            return true;
        }

        return false;
    }

    function selectTable($name) {

        if($name == "product") {
            print_r($this->productTable);
        }

        else if($name == "accessory") {
            print_r($this->accessoryTable);
        }

        else if($name == "category") {
            print_r($this->categoryTable);
        }
    }

    function updateTable($name, $row) {

        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if($name == "product") {
            for($i = 0; $i < sizeof($this->productTable); $i++) {
                if($row->id == $this->productTable[$i]->get_id()) $this->productTable[$i] = $row;
                
            }

            return true;
        }

        else if($name == "accessory") {
            for($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if($row->id == $this->accessoryTable[$i]->get_id()) $this->accessoryTable[$i] = $row;
            }

            return true;

        }

        else if($name == "category") {
            for($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if($row->id == $this->categoryTable[$i]->get_id()) $this->categoryTable[$i] = $row;
            }

            return true;
        }

        return false;
    }

    function deleteTable($name, $row) {

        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if($name == "product") {
            array_splice($this->productTable, $row-1, 1);

            return true;
        }

        else if($name == "accessory") {
            array_splice($this->accessoryTable, $row-1, 1);

            return true;
        }

        else if($name == "category") {
            array_splice($this->categoryTable, $row-1, 1);

            return true;
        }

        return false;
    }

    function truncateTable($name) {

        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if($name == "product") {
            array_splice($this->productTable, 0, sizeof($this->productTable));

            return true;
        }
        else if($name == "accessory") {
            array_splice($this->accessoryTable, 0, sizeof($this->accessoryTable));

            return true;
        }
        else if($name == "category") {
            array_splice($this->categoryTable, 0, sizeof($this->categoryTable));

            return true;
        }

        return false;
    }

    function updateTableById($id, $row) {

        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if($row instanceof Product) {
            for($i = 0; $i < sizeof($this->productTable); $i++) {
                if($id == $this->productTable[$i]->get_id()) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        }

        else if($row instanceof Accessory) {
            for($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if($id == $this->accessoryTable[$i]->get_id()) {
                    $this->accessoryTable[$i] = $row;
                }
            }
            return true;
        }

        else if($row instanceof Category) {
            for($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if($id == $this->categoryTable[$i]->get_id()) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }

        return false;
    }

}    
?>