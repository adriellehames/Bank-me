<?php

namespace Controllers;

use models\RegisterModel;
use Views\RegisterView;


class RegisterController
{
    public $view;
    public $models;

    public function __construct()
    {
        $this->view = new RegisterView();
        
    }
    public function signup()
    {
        
         $name= $_POST["name"];
         $surname= $_POST["surname"];
         $cpf= $_POST["cpf"];
         $rg= $_POST["rg"];
         $birth_date= $_POST["birth_date"];
         $postal_code= $_POST["postal_code"];
         $state= $_POST["state"];
         $city= $_POST["city"];
         $district= $_POST["district"];
         $adress= $_POST["adress"];
         $number= $_POST["number"];
         $complement= $_POST["complement"];
         $monthly_income= $_POST["monthly_income"];
         $profession= $_POST["profession"];
         $telephone= $_POST["telephone"];
         $document_photo= $_POST["document_photo"];
         $email= $_POST["email"];
         $request_date= null; 
         $status_register= null;
         $user_complience= null; 

    $this->models = new RegisterModel(
        $name,
        $surname,
        $cpf,
        $rg,
        $birth_date,
        $postal_code,
        $state,
        $city,
        $district,
        $adress,
        $number,
        $complement,
        $monthly_income,
        $profession,
        $telephone,
        $document_photo,
        $email,
        $request_date,
        $status_register, 
        $user_complience,
 ); 
       
 
$message= $this->models->insertDb();




    }

    public function index()
    {
        echo $this->view->render();
    }
}
