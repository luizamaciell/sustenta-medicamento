<?php

namespace Source\Models;

use Source\Core\Connect;

class Medicines
{
    public function selectAll ()
    {
        $query = "SELECT * FROM medicines";
        $stmt = Connect::getInstance()->query($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $planos = $stmt->fetchAll();
            return $planos;
        } else {
            return false;
        }
    } 

        public function selectByCategories(string $categories)
        {
            $query = "SELECT medicines.*, categories.name as 'category_name' 
            FROM medicines
            join categories on medicamentos.categories_id = categories.id 
            WHERE categories.name like ('{$categories}')";
            $stmt = Connect::getInstance()->query($query);
            return $stmt->fetchAll();
        }

}