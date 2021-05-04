<?php
class Product {
    //properties
    public int $id;
    public string $name;
    public int $categoryId;
    public int $quantity;
    public string $productLine;

    //methods
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name; 
    }
    function set_id($id) {
        $this->id = $id;
    }

    function get_id() {
        return $this->id;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

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