<?php
namespace Controllers;
use Views\ResourceView;
 
class ResourcesController 
{
private $view;

    public function __construct() {
        $this->view= new ResourceView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

