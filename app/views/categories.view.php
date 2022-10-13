<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class categoriesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); //inicio smarty
    }

    function showCategories($categories, $error=null){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('categories.tpl');
    }

    function showFormEditCategory($category, $error=null) {
        $this->smarty->assign('category', $category);
        $this->smarty->assign('error', $error);
        $this->smarty->display('form-edit-category.tpl');
    }

    function showListCategories(){
        header("Location:" .BASE_URL. "categories"); 
    }

}