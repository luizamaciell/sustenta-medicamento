<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Category;
use Source\Models\Medicines;


class Web
{

    private $view;
    private $categories;

    public function __construct(){

        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");
    }

    public function home()
    {
  
        echo $this->view->render("home", []);

    }
    public function about()
    {
        $faq = new Faq();
        $faqs = $faq->selectAll();
     
        echo $this->view->render("about",[
            "faqs" => $faqs
        ]);
    }
    public function contact (){
       
        echo $this->view->render("contact");
    }  

    public function medicines(array $data)
    {
        $medicine = new Medicines();

         if(!empty ($data["categories"])){
            echo $this->view->render("medicines",[
                "medicines" => $medicine->selectByCategories($data["categories"]),
                "categories" => $this->categories
            ]);
            return;
         } 

         $medicines = $medicine->selectAll();

        echo $this->view->render("medicines",[
            "medicines" => $medicines,
            "categories" => $this->categories
        ]);

    }
}
