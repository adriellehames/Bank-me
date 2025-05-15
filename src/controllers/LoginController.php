<?php
namespace Controllers;
use View\LoginView;
 
class LoginController 
{
private $view;

    public function __construct() {
        $this->view= new LoginView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

