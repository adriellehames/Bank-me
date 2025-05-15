<?php
namespace Controllers;
use View\IntegrationView;
 
class IntegrationController 
{
private $view;

    public function __construct() {
        $this->view= new IntegrationView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

