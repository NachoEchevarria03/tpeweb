<?php

class productsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shop;charset=utf8', 'root', '');
    }

    /** Devuelve productos */
    public function getAllProducts() {

        $query = $this->db->prepare("SELECT a.*, b.* FROM producto a INNER JOIN categoria b ON a.id_categoria_fk = b.id_categoria_fk");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProductsByCategories($categoria){
        $query = $this->db->prepare( "SELECT p.id, p.nombre, p.talle, p.precio, p.url_imagen, c.id_categoria_fk AS categoria FROM producto p JOIN categoria c ON p.id_categoria_fk=c.id_categoria_fk  WHERE categoria=?");
        $query -> execute([$categoria]);
        $products = $query->fetchAll(PDO::FETCH_OBJ); 
        return $products;
    }

    function insertProduct($nombre, $talle, $precio, $url, $id_categoria) {
        $query = $this->db->prepare("INSERT INTO producto (nombre, talle, precio, url_imagen, id_categoria_fk) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$nombre, $talle, $precio, $url, $id_categoria]);
    }

    function deleteProductById($id) {
        $query = $this->db->prepare("DELETE FROM producto WHERE id = ?");
        $query->execute([$id]);
    }

    function editProductById($id,$nombre,$talle,$precio,$url,$id_categoria) {
        $query = $this->db->prepare("UPDATE producto SET nombre = ? , talle = ? , precio = ? , url_imagen = ?, id_categoria_fk = ? WHERE id = ?");
        $query->execute([$nombre,$talle,$precio,$url,$id_categoria,$id]);
    }


    function getDetail($id){
        $query = $this->db->prepare("SELECT p.*, c.* FROM producto p INNER JOIN categoria c ON p.id_categoria_fk = c.id_categoria_fk WHERE id=?");
        $query->execute([$id]);
        $product = $query->fetchALL(PDO::FETCH_OBJ); 
        return $product;
    }

    function getProd($id){
        $query = $this->db->prepare( "SELECT p.id,p.nombre,p.talle,p.precio,p.url_imagen, p.id_categoria_fk ,c.categoria AS categoria,c.id_categoria_fk FROM producto p JOIN categoria c ON p.id_categoria_fk=c.id_categoria_fk  WHERE id=?");
        $query -> execute([$id]);
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product; 
    }

   
}