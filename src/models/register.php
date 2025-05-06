<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
 

require_once '../core/Database.php'; //importantado o arquivo Database.php

class Register
{
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
    private $db; //armazena os dados de conexão


    public function __construct(
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
        $user_complience_approve
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->birth_date = $birth_date;
        $this->postal_code = $postal_code;
        $this->state = $state;
        $this->city = $city;
        $this->district = $district;
        $this->adress = $adress;
        $this->number = $number;
        $this->complement = $complement;
        $this->monthly_income = $monthly_income;
        $this->profession = $profession;
        $this->telephone = $telephone;
        $this->document_photo = $document_photo;
        $this->email = $email;
        $this->request_date = $request_date;
        $this->status_register = $status_register;
        $this->user_complience_approve = $user_complience_approve;
        $this->db = new Database();
    }

    private function validation()
    {
        //Listando campos obrigatórios-array associativo
        $required_fields= [
        'name' => $this->name,
        'surname'=> $this-> surname, 
        'cpf'=> $this-> cpf, 
        'rg'=> $this-> rg,
        'birth_date'=> $this-> birth_date,
        'postal_code'=> $this->postal_code,
        'state'=> $this-> state,
        'city'=> $this-> city,
        'district'=> $this-> district,
        'adress'=> $this-> adress,
        'number'=> $this-> number,
        'complement'=> $this->complement,
        'telephone'=> $this-> telephone,
        'document_photo'=> $this-> document_photo,
        'email'=> $this-> email,
        'request_date'=> $this->request_date,
        'status_register'=> $this-> status_register,
 
        ];

        //verifica se algum campo obrigatório está vazio
        foreach ($required_fields as $nomeCampo => $valorCampo) {
            if (empty(trim($valorCampo))) {
                throw new Exception("O campo '$nomeCampo' é obrigatório.");
            }
        }

        //verificando idade
        $dataNascimento = new DateTime($this->birth_date);
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($dataNascimento)->y;
    
     if ($idade < 18){
     throw new Exception("Sua idade deve ser maior ou igual a 18 anos para realizar o cadastro");
    }

    //verificando email
    if (!filter_var(trim($this->email),FILTER_VALIDATE_EMAIL)){
        throw new Exception("Email inválido");
    }


    }
    public function insertDb()

    { 
        try{
        $this->validation();
        // estou usando o "executequery" do  Database.phpt
        $query = ("INSERT INTO register (name, surname, cpf, rg, birth_date, postal_code,state,city,district,adress, number,complement,monthly_income,profession,telephone, document_photo,email,request_date,status_register ) VALUES (:name, :surname, :cpf, :rg, :birth_date, :postal_code,:state,:city,:district,:adress, :number,:complement,:monthly_income,:profession,:telephone, :document_photo,:email,:request_date,:status_register )");
        $params = [
            ':name' => $this->name,
            ':surname' => $this->surname,
            ':cpf' => $this->cpf,
            ':rg' => $this->rg,
            ':birth_date' => $this->birth_date,
            ':postal_code' => $this->postal_code,
            ':state' => $this->state,
            ':city' => $this->city,
            ':district' => $this->district,
            ':adress' => $this->adress,
            ':number' => $this->number,
            ':complement' => $this->complement,
            ':monthly_income' => $this->monthly_income,
            ':profession' => $this->profession,
            ':telephone' => $this->telephone,
            ':document_photo' => $this->document_photo,
            ':email' => $this->email,
            ':request_date' => $this->request_date,
            ':status_register' => $this->status_register
        ];


        $this->db->executeQuery($query, $params); //executando a inserção de dados

        echo "Pré-Cadastro efetuado com sucesso, enviaremos um link de confirmação para o seu email!";
    } catch (Exception $e) {
        echo "Erro no cadastro: " . $e->getMessage();
    }

    }
}
