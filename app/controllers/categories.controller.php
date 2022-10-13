<?php

require_once './app/views/categories.view.php';
require_once './app/models/categories.model.php';


class categoriesController {
    private $model;
    private $view;
    private $nada;
    
    public function __construct() {
        $this->model = new categoriesModel();
        $this->view = new categoriesView();
       
    }

    function showCategories(){
        $categories =$this->model->getCategories();
        $this->view->showCategories($categories);
    }


    function addCategory(){
        
        $nombre = $_POST['categoria'];
        $categories =$this->model->getCategories();
        if (isset($nombre) && !empty($nombre)){
        $this->model->addCategory($nombre);
        header("Location: " . "categories"); 
        }else{
            $this->view->showCategories($categories,"Ingrese un valor en el campo");
        }
        
    }
}