<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class productsView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products, $categories,$error=null) {
        $this->smarty->assign('products', $products);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('categories', $categories);
        

        $this->smarty->display('products.tpl');
    }

    
    function showProductsByCategories($products, $category){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('category', $category);
        $this->smarty->display('productsByCategory.tpl');
    }
    
    function showDetail($product){
        $this->smarty->assign('products', $product);  
        $this->smarty->display('productsDetail.tpl');
    }

    function showFormEdit($categories, $product,$error=null) {
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('product', $product);
        $this->smarty->display('form-edit.tpl');
    }
}