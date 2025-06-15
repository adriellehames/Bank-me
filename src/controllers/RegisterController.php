<?php

namespace Controllers;

use models\RegisterModel;
use Views\RegisterView;
use Exception;
use core\Database;

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
 
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $birth_date = $_POST["birth_date"];
    $postal_code = $_POST["postal_code"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $adress = $_POST["adress"];
    $number = $_POST["number"];
    $complement = $_POST["complement"];
    $monthly_income = $_POST["monthly_income"];
    $profession = $_POST["profession"];
    $telephone = $_POST["telephone"];
    $document_photo = "";
    $email = $_POST["email"];
    $request_date = "";
    $status_register = "";
    $user_complience = "";


    //upload foto
    if (isset($_FILES['document_photo']) && $_FILES['document_photo']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['document_photo']['tmp_name'];
        $fileName = $_FILES['document_photo']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = ['jpg', 'jpeg', 'png'];

        if (in_array($fileExtension, $allowedfileExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir =  __DIR__. '/uploads/';


        }
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $document_photo = $dest_path;
            } else {
                echo "Erro ao mover o arquivo para o diretório de upload.";
                return;
            }
        } else {
            echo "Tipo de arquivo não permitido. Use jpg, jpeg ou png.";
            return;
        }


    

    // Cria o modelo com os dados recebidos
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



$db = new Database();

    $query = "INSERT INTO users 
        (name, surname, cpf, rg, birth_date, postal_code, state, city, district, adress, number, complement, monthly_income, profession, telephone, document_photo, email, request_date, status_register, user_complience)
        VALUES 
        (:name, :surname, :cpf, :rg, :birth_date, :postal_code, :state, :city, :district, :adress, :number, :complement, :monthly_income, :profession, :telephone, :document_photo, :email, :request_date, :status_register, :user_complience)";

    $params = [
        ":name" => $name,
        ":surname" => $surname,
        ":cpf" => $cpf,
        ":rg" => $rg,
        ":birth_date" => $birth_date,
        ":postal_code" => $postal_code,
        ":state" => $state,
        ":city" => $city,
        ":district" => $district,
        ":adress" => $adress,
        ":number" => $number,
        ":complement" => $complement,
        ":monthly_income" => $monthly_income,
        ":profession" => $profession,
        ":telephone" => $telephone,
        ":document_photo" => $document_photo,
        ":email" => $email,
        ":request_date" => date('Y-m-d H:i:s'),
        ":status_register" => 'pendente',
        ":user_complience" => $user_complience
    ];



    try {
        $message = $this->models->insertDb();
        echo $this->view->render($message, "success");
    } catch (Exception $e) {
        echo $this->view->render($e->getMessage(), "error");
    }
}

    public function index()
    {
        echo $this->view->render();
    }
}
print_r($_FILES);