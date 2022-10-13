<?php
require_once './app/controllers/products.controller.php';
require_once './app/controllers/categories.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'shop'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// instancio el unico controller que existe por ahora
$productsController = new productsController();
$categoriesController = new categoriesController();


//tabla de ruteo
switch ($params[0]) {
    case 'shop':
        $productsController->showProducts();
        break;
    case 'add':
        $productsController->addProduct();
        break;
    case 'delete':
        //obtengo parametro de la accion
        $id = $params[1];
        $productsController->deleteProduct($id);
        break;
    case 'edit':
        $productsController->showFormEdit($params[1]);
        break;
    case 'update':
        $productsController->editProduct();
        break;
    case 'category':
        $category = $params[1];
        $productsController->showProductsByCategory($category);
        break;
    case 'detailproduct':
        $id = $params[1];
        $productsController->showDetailProduct($id);
        break;
    case 'categories':
        $categoriesController->showCategories();
        break;
    case 'addCategory':
        $categoriesController->addCategory();
        break;
    case 'deleteCategory':
        $id = $params[1];
        $categoriesController->deleteCategory($id);
        break;
    case 'editCategory':
        $categoriesController->showFormEditCategory($params[1]);
        break;
    case 'updateCategory':
        $categoriesController->editCategory();
        break;
    default:
        echo('404 Page not found');
        break;
}