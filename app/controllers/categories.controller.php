<?php

require_once './app/views/categories.view.php';
require_once './app/models/categories.model.php';


class categoriesController {
    private $model;
    private $view;
    
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
        $this->view->showListCategories();
        }else{
            $this->view->showCategories($categories,"Complete el campo por favor!!");
        }
    }

    function deleteCategory($id) {
        $this->model->deleteCategoryById($id);
        $this->view->showListCategories();
    }

    function showFormEditCategory($id) {
        $category = $this->model->getCat($id);
        $this->view->showFormEditCategory($category);
    }

    function editCategory() {
        $id = $_POST['id'];
        $nombre = $_POST['categoria'];

        $category = $this->model->getCat($id);

        if (isset($nombre) && !empty($nombre)) {
            $this->model->editCategoryById($id, $nombre);
            $this->view->showListCategories();
        }else {
            $this->view->showFormEditCategory($category,"Complete el campo por favor!!");
        }
    }
}