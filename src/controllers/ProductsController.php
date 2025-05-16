<?php
namespace Controllers;
use Views\ProductView;
 
class ProductsController
{
private $view;

    public function __construct() {
        $this->view= new ProductView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

