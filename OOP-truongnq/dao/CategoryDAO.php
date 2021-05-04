<?php 
include "../entity/Category.php";
    class CategoryDAO {
        
        //methods
        function insert($row) {
            $db = new Database();
            $db->insertTable("category", $row);

            return $db->insertTable("category", $row);
        }
    }
?>