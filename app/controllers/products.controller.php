<?php
require_once './app/models/products.model.php';
require_once './app/views/products.view.php';
require_once './app/models/categories.model.php';
require_once './app/helpers/auth.helper.php';


class productsController {
    private $model;
    private $view;
    private $modelCategories;
    private $authHelper;


    public function __construct() {
        $this->model = new productsModel();
        $this->view = new productsView();
        $this->modelCategories = new categoriesModel();
        $this->authHelper = new authHelper();
    }


    public function showProducts() {
        $productos = $this->model->getAllProducts();
        $categorias = $this->modelCategories->getCategories();
        $this->view->showProducts($productos, $categorias);
    }

    
    function showProductsByCategory($category) {
        $productos = $this->model->getProductsByCategories($category);
        $this->view->showProductsByCategories($productos, $category);
    }

    function addProduct() {
        $this->authHelper->checkLoggedIn();
        $productos = $this->model->getAllProducts();
        $categorias = $this->modelCategories->getCategories();
        $nombre = $_POST['nombre'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $url = $_POST['url'];
        $id_categoria = $_POST['categoria'];
        if (isset($nombre) && !empty($nombre) && isset($talle) && !empty($talle) && isset($precio) && !empty($precio) && isset($id_categoria) && !empty($id_categoria)){
        $id = $this->model->insertProduct($nombre, $talle, $precio, $url, $id_categoria);
        header("Location: " . BASE_URL);
        }else{
            $this->view->showProducts($productos, $categorias,"Complete todos los campos por favor!!");
        }
    }
    

    function deleteProduct($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL);    
    }

    function showFormEdit($id) {
        $this->authHelper->checkLoggedIn();
        $categories = $this->modelCategories->getCategories();
        $producto = $this->model->GetProd($id);
        $this->view->showFormEdit($categories,$producto);
    }

    function editProduct() {
        $this->authHelper->checkLoggedIn();
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $url = $_POST['url'];
        $id_categoria = $_POST['categoria'];

        $categories = $this->modelCategories->getCategories();
        $producto = $this->model->GetProd($id);

        if (isset($nombre) && !empty($nombre) && isset($talle) && !empty($talle) && isset($precio) && !empty($precio) && isset($id_categoria) && !empty($id_categoria)){
        $this->model->editProductById($id,$nombre,$talle,$precio,$url,$id_categoria);
        header("Location: " . BASE_URL);   
        }else{
            $this->view->showFormEdit($categories,$producto,"Complete todos los campos por favor!!");
        }
    }
    
    function showDetailProduct($id){
        $producto =$this->model->GetDetail($id);
        $this->view->showDetail($producto);
    }
    

}