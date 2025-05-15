<?php
namespace Controllers;

use models\RegisterModel;
use View\RegisterView;

 
class RegisterController
{
public $view;
public $models;

    public function __construct() {
        $this->view= new RegisterView(); 
        $this->models= new RegisterModel(); 
    }
    public function signup(RegisterController $models) {

    }
}
