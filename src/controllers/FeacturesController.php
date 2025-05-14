<?php
namespace Controllers;
use Views\FeaturesView;
 

class FeacturesController
{
private $view;

    public function __construct() {
        $this->view= new FeaturesView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

