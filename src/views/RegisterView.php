<?php

namespace Views;

class RegisterView
{
    private $message = '';
    private $messageType = '';

    public function render($message = '', $messageType = '')
    {
        $this->message = $message;
        $this->messageType = $messageType;

        $messageStyle = $this->message ? 'display: block;' : 'display: none;';
        $messageClass = $this->messageType === 'success' ? 'alert-success' : 'alert-danger';



        return <<<HTML

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank.me - Custom Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-custom {
            margin: 40px 100px;
            border-radius: 16px;
            padding: 25px 40px;
        }

        .form-custom {
            margin: 40px 100px;
            border-radius: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">


        <div class="col p-2 d-flex justify-content-between align-items-center fs-4  ">
            <p class="p text-white ">Efetue seu Pré-registro</p>
            <a class="navbar-brand fw-bold" href= "../index.html">
             <a href='/bank-me' >   <img src="assets/images/logo.png" alt="Logo" width="34" height="42"> bank.me</a>
            </a>
        </div>

    </nav>
<div class="message-container">
                <div class="alert {$messageClass}" style="{$messageStyle}" role="alert">
                    {$this->message}
                </div>
            </div>

    <div class="row mb-1 mx-1 form-custom">
        <form action="/bank-me/Signup" method="POST" enctype="multipart/form-data">

            <div class="col form-custom">
                <p class="p text-dark"> Digite seu Nome:</p>
                <input type="text" class="form-control" placeholder="nome" name="name">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu Sobrenome:</p>
                <input type="text" class="form-control" placeholder="sobrenome" name="surname">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu CPF:</p>
                <input type="text" class="form-control" placeholder="CPF" name="cpf">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu RG:</p>
                <input type="text" class="form-control" placeholder="RG" name="rg">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite sua data de nascimento:</p>
                <input type="datetime" class="form-control" placeholder="data de nascimento" name="birth_date">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu CEP:</p>
                <input type="text" class="form-control" placeholder="CEP" name="postal_code">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu estado:</p>
                <input type="text" class="form-control" placeholder="estado" name="state">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite sua cidade:</p>
                <input type="text" class="form-control" placeholder="cidade" name="city">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu distrito :</p>
                <input type="text" class="form-control" placeholder="distrito" name="district">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu endereço :</p>
                <input type="text" class="form-control" placeholder="endereço" name="adress">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite o número da sua residência :</p>
                <input type="text" class="form-control" placeholder="número da sua residência"
                    name="number">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite o complemento :</p>
                <input type="text" class="form-control" placeholder="complemento" name="complement">
            </div>


            <div class="col form-custom">
                <p class="p text-dark">Digite sua renda mensal :</p>
                <input type="text" class="form-control" placeholder="renda mensal" name="monthly_income">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite sua profissão :</p>
                <input type="text" class="form-control" placeholder="profissão" name="profession">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu telefone :</p>
                <input type="text" class="form-control" placeholder="telefone" name="telephone">
            </div>


            <div class="col form-custom">
                <p class="p text-dark">Faça upload do de uma foto do seu documento :</p>
                <input type="file" class="form-control" name="document_photo" placeholder="foto do documento" >
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite seu email:</p>
                <input type="text" class="form-control" placeholder="email" name="email">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Digite sua senha :</p>
                <input type="password" class="form-control" placeholder="senha" name="senha">
            </div>

            <div class="col form-custom">
                <p class="p text-dark">Confirme sua senha :</p>
                <input type="password" class="form-control" placeholder="senha" name="senha_confirm">
            </div>


            <div class="col form-custom">
                <div>
                    <button class="btn btn-dark px-4 py-2 mt-3 fw-bold"> Enviar </button>
                </div>
            </div>
        </form>
    </div>



</body>

</html>
HTML;
    }
}
