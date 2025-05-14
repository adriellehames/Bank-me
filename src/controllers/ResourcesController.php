<?php
namespace Controllers;
use Views\ResourcesView;
 
class ResourcesController 
{
private $view;

    public function __construct() {
        $this->view= new ResourcesView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

