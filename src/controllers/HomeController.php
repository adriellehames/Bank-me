<?php
namespace Controllers;
use Views\HomeView;

class HomeController
{
private $view;

    public function __construct() {
        $this->view= new HomeView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}
