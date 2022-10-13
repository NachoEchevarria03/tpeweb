<?php

class categoriesModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shop;charset=utf8', 'root', '');
    }

    public function getCategories() {
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function addCategory($nombre){
        $query = $this->db->prepare("INSERT INTO categoria (categoria) VALUES (?)");
        $query->execute([$nombre]);
    }

    function deleteCategoryById($id) {
        $query = $this->db->prepare("DELETE FROM categoria WHERE id_categoria_fk = ?");
        $query->execute([$id]);
    }

    function editCategoryById($id,$nombre) {
        $query = $this->db->prepare("UPDATE categoria SET categoria = ? WHERE id_categoria_fk = ?");
        $query->execute([$nombre, $id]);
    }

    function getCat($id) {
        $query = $this->db->prepare( "SELECT * FROM categoria WHERE id_categoria_fk = ?");
        $query -> execute(array($id));
        $category = $query->fetch(PDO::FETCH_OBJ);
        return $category; 
    }
}