<?php
namespace Controllers;
use Views\FeatureView;
 

class FeacturesController
{
private $view;

    public function __construct() {
        $this->view= new FeatureView(); 
    }

    public function index()
    {
    echo $this->view->render();
    }
}

