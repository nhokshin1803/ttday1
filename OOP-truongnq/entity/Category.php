<?php
class Category{
    //properties
    public int $id;
    public string $name;

    //methods

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

}
?>
