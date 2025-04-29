<?php 

class Register{
private $id;
private $name;
private $surname;
private $cpf;
private $rg;
private $birth_date;
private $postal_code;
private $state;
private $city;
private $district;
private $adress;
private $number;
private $complement;
private $monthly_income;
private $profession; 
private $telephone;
private $document_photo;
private $email;
private $request_date; 
private $status_register;
private $user_complience_approve; 





private function __construct($id,$name,$surname,$cpf,$rg,$birth_date,
$postal_code,$state,$city,$district,$adress,$number,$complement,
$monthly_income,$profession,$telephone,$document_photo,$email,
$request_date,$status_register,$user_complience_approve){

    $this->id= $id; 
    $this->name= $name; 
    $this->surname= $surname;
    $this->cpf= $cpf;
    $this->rg= $rg;
    $this->birth_date= $birth_date;
    $this->postal_code= $postal_code;
    $this->state= $state;
    $this->city= $city;
    $this->district= $district;
    $this->adress= $adress;
    $this->number= $number;
    $this->complement= $complement;
    $this->monthly_income= $monthly_income;
    $this->profession= $profession;
    $this->telephone= $telephone;
    $this->document_photo=$document_photo;
    $this->email=$email;
    $this->request_date=$request_date;
    $this->status_register=$status_register;
    $this->user_complience_approve=$user_complience_approve;
}

 private function insert_db(){

 }

}



?>