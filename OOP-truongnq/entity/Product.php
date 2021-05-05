<?php
require_once "BaseRow.php";

class Product extends BaseRow{
    //properties
    public int $id;
    public string $name;
    public int $categoryId;
    public int $quantity;
    public string $productLine;

    //methods
    
    function set_categoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    function get_categoryId() {
        return $this->categoryId;
    }

    function set_quantity($quantity) {
        $this->quantity = $quantity;
    }

    function get_quantity() {
        return $this->quantity;
    }

    function set_productLine($productLine) {
        $this->productLine = $productLine;
    }

    function get_productLine() {
        return $this->productLine;
    }

}
?>