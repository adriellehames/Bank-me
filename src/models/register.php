<?php
require_once __DIR__ . '/../core/Database.php';

class Register {
    private $db;
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

    public function __construct() {
        $this->db = new Database();
    }

    public function create($data) {
        // Validar campos obrigatórios
        $required_fields = ['name', 'surname', 'cpf', 'rg', 'birth_date', 'postal_code', 
                           'state', 'city', 'district', 'adress', 'number', 'telephone', 
                           'document_photo', 'email'];
        
        foreach ($required_fields as $field) {
            if (empty($data[$field])) {
                throw new Exception("Campo {$field} é obrigatório");
            }
        }

        // Validar idade mínima de 18 anos
        $birth_date = new DateTime($data['birth_date']);
        $today = new DateTime();
        $age = $today->diff($birth_date)->y;
        
        if ($age < 18) {
            throw new Exception("É necessário ter 18 anos ou mais para se registrar");
        }

        // Gerar token de confirmação de email
        $confirmation_token = bin2hex(random_bytes(32));
        
        // // Enviar email de confirmação
        // $confirmation_link = "http://localhost/bank-me/confirm-email.php?token=" . $confirmation_token;
        // $to = $data['email'];
        // $subject = "Confirme seu email - Bank Me";
        // $message = "Por favor, confirme seu email clicando no link: {$confirmation_link}";
        // $headers = "From: noreply@bankme.com";

        // if (!mail($to, $subject, $message, $headers)) {
        //     throw new Exception("Erro ao enviar email de confirmação");
        // }

        // Preparar dados para inserção
        $insert_data = [
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':cpf' => $data['cpf'],
            ':rg' => $data['rg'],
            ':birth_date' => $data['birth_date'],
            ':postal_code' => $data['postal_code'],
            ':state' => $data['state'],
            ':city' => $data['city'],
            ':district' => $data['district'],
            ':adress' => $data['adress'],
            ':number' => $data['number'],
            ':complement' => $data['complement'],
            ':monthly_income' => $data['monthly_income'] ?? null,
            ':profession' => $data['profession'] ?? null,
            ':telephone' => $data['telephone'],
            ':document_photo' => $data['document_photo'],
            ':email' => $data['email'],
            ':request_date' => date('Y-m-d H:i:s'),
            ':status_register' => 'pending' ];

        $query = "INSERT INTO register (name, surname, cpf, rg, birth_date, postal_code, 
                                   state, city, district, adress, number, complement, 
                                   monthly_income, profession, telephone, document_photo, 
                                   email, request_date, status_register) 
                  VALUES (:name, :surname, :cpf, :rg, :birth_date, :postal_code, 
                          :state, :city, :district, :adress, :number, :complement, 
                          :monthly_income, :profession, :telephone, :document_photo, 
                          :email, :request_date, :status_register)";

        try {
            $this->db->executeQuery($query, $insert_data);
            return true;
        } catch (PDOException $e) {
            throw new Exception("Erro ao salvar registro: " . $e->getMessage());
        }
    }

    public function confirmEmail($token) {
        $query = "UPDATE users SET status_register = 'ativo' WHERE confirmation_token = :token";
        $params = [':token' => $token];

        try {
            $result = $this->db->executeQuery($query, $params);
            return $result->rowCount() > 0;
        } catch (PDOException $e) {
            throw new Exception("Erro ao confirmar email: " . $e->getMessage());
        }
    }
}
?>