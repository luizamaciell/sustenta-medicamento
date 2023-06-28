<?php

namespace Source\Models;

use Source\Core\Connect;

class Category{
    public function selectAll(){
        $query = "SELECT * FROM categories";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}