<?php
namespace Controllers;
use View\ResourceView;
 
class ResourceController 
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

