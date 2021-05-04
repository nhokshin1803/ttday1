<?php
class Database {
    //properties
    public $productTable = [];
    public $categoryTable = [];
    public $accessoryTable = [];
    //methods
    function __constructor() {

    }

    function insertTable($name, $row) {
        if($name == "product") {
            array_push($this->productTable, $row);
        }
        else if($name == "accessory") {
            array_push($this->accessoryTable, $row);
        }
        else if($name == "category") {
            array_push($this->categoryTable, $row);
        }

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
        if($name == "product") {
            for($i = 0; i < sizeof($productTable); $i++) {
                if($row == $i) $productTable[i] = $row;
            }
        }
        else if($name == "accessory") {
            for($i = 0; i < sizeof($accessoryTable); $i++) {
                if($row == $i) $accessoryTable[i] = $row;
            }
        }
        else if($name == "category") {
            for($i = 0; i < sizeof($categoryTable); $i++) {
                if($row == $i) $categoryTable[i] = $row;
            }
        }
    }

    function deleteTable($name, $row) {
        if($name == "product") {
            array_splice($this->productTable, $row-1, 1);
        }
        else if($name == "accessory") {
            array_splice($this->accessoryTable, $row-1, 1);
        }
        else if($name == "category") {
            array_splice($this->categoryTable, $row-1, 1);
        }
    }

    function truncateTable($name) {
        if($name == "product") {
            array_splice($this->productTable, 0, sizeof($this->productTable));
        }
        else if($name == "accessory") {
            array_splice($this->accessoryTable, 0, sizeof($this->accessoryTable));
        }
        else if($name == "category") {
            array_splice($this->categoryTable, 0, sizeof($this->categoryTable));
        }
    }

    function updateTableById(int $id, $row) {
        
    }

}    
?>