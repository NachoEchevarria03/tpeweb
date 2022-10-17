<?php
require_once './app/views/categories.view.php';
require_once './app/models/categories.model.php';
require_once './app/helpers/auth.helper.php';


class categoriesController {
    private $model;
    private $view;
    private $authHelper;
    
    public function __construct() {
        $this->model = new categoriesModel();
        $this->view = new categoriesView();
        $this->authHelper = new authHelper();
    }

    function showCategories(){
        $categories =$this->model->getCategories();
        $this->view->showCategories($categories);
    }


    function addCategory(){
        $this->authHelper->checkLoggedIn();
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
        if(isset($_SESSION["USER_EMAIL"])){
        $this->model->deleteCategoryById($id);
        $this->view->showListCategories();
        } else {
            header("Location:".BASE_URL. "login");
        }
    }

    function showFormEditCategory($id) {
        $this->authHelper->checkLoggedIn();
        $category = $this->model->getCat($id);
        $this->view->showFormEditCategory($category);
    }

    function editCategory() {
        $this->authHelper->checkLoggedIn();
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