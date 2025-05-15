<?php
namespace Controllers;
use View\FeatureView;
 

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

