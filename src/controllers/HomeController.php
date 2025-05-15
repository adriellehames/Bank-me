<?php
namespace Controllers;
use View\HomeView;

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
