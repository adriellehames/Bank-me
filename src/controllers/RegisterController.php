<?php

namespace Controllers;

use Models\Register;
use Views\RegisterView;
use Exception;

class RegisterController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Register();
        $this->view = new RegisterView();
    }

    public function index() {
        echo $this->view->render();
    }

    public function processRegistration() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo $this->view->render('Método inválido', 'danger');
        }
        // Validar upload da foto do documento
        if (!isset($_FILES['document_photo']) || $_FILES['document_photo']['error'] !== UPLOAD_ERR_OK) {
            echo $this->view->render('É necessário enviar a foto do documento', 'danger');
        }

        // Processar upload da foto
        $uploadDir = __DIR__ . '/../../uploads/documents/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileExtension = strtolower(pathinfo($_FILES['document_photo']['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
        
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo $this->view->render('Formato de arquivo não permitido. Use JPG, PNG ou PDF', 'danger');
        }

        $fileName = uniqid('doc_') . '.' . $fileExtension;
        $uploadFile = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['document_photo']['tmp_name'], $uploadFile)) {
            echo $this->view->render('Erro ao fazer upload do documento', 'danger');
        }

        // Preparar dados para o modelo
        $userData = [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'cpf' => $_POST['cpf'],
            'rg' => $_POST['rg'],
            'birth_date' => $_POST['birth_date'],
            'postal_code' => $_POST['postal_code'],
            'state' => $_POST['state'],
            'city' => $_POST['city'],
            'district' => $_POST['district'],
            'adress' => $_POST['adress'],
            'number' => $_POST['number'],
            'complement' => $_POST['complement'] ?? '',
            'monthly_income' => $_POST['monthly_income'] ?? null,
            'profession' => $_POST['profession'] ?? '',
            'telephone' => $_POST['telephone'],
            'document_photo' => $fileName,
            'email' => $_POST['email']
        ];

        try {
            // Salvar no banco de dados
            if ($this->model->create($userData)) {
                echo $this->view->render('Pré-registro realizado com sucesso! Verifique seu email para próximos passos.', 'success');
            } else {
                echo $this->view->render('Erro ao salvar os dados', 'danger');
            }
        } catch (Exception $e) {
            echo $this->view->render('Erro ao processar o registro: ' . $e->getMessage(), 'danger');
        }
    }
}