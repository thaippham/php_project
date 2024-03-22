<?php
class ProductController {
    private $productModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }
    public function menu(){
        include_once 'app/views/menu/menu.php';
    }
    public function detail(){
        include_once 'app/views/products/detail.php';
    }
}