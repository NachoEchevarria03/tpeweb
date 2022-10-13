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

}