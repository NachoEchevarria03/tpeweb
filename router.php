<?php
require_once './app/controllers/products.controller.php';
require_once './app/controllers/categories.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'shop'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


//tabla de ruteo
switch ($params[0]) {
    case 'shop':
        $productsController = new productsController();
        $productsController->showProducts();
        break;
    case 'login':
        $authController = new authController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'add':
        $productsController = new productsController();
        $productsController->addProduct();
        break;
    case 'delete':
        $productsController = new productsController();
        $id = $params[1];
        $productsController->deleteProduct($id);
        break;
    case 'edit':
        $productsController = new productsController();
        $productsController->showFormEdit($params[1]);
        break;
    case 'update':
        $productsController = new productsController();
        $productsController->editProduct();
        break;
    case 'category':
        $productsController = new productsController();
        $category = $params[1];
        $productsController->showProductsByCategory($category);
        break;
    case 'detailproduct':
        $productsController = new productsController();
        $id = $params[1];
        $productsController->showDetailProduct($id);
        break;
    case 'categories':
        $categoriesController = new categoriesController();
        $categoriesController->showCategories();
        break;
    case 'addCategory':
        $categoriesController = new categoriesController();
        $categoriesController->addCategory();
        break;
    case 'deleteCategory':
        $categoriesController = new categoriesController();
        $id = $params[1];
        $categoriesController->deleteCategory($id);
        break;
    case 'editCategory':
        $categoriesController = new categoriesController();
        $categoriesController->showFormEditCategory($params[1]);
        break;
    case 'updateCategory':
        $categoriesController = new categoriesController();
        $categoriesController->editCategory();
        break;
    default:
        echo('404 Page not found');
        break;
}