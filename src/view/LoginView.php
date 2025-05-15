<?php
namespace View;

class LoginView
{

    public function __construct() {}

    public function render(){
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
                .bg-custom {
                    background-color: #000814;
                }
        
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
                    <p class="p text-white ">Efetue seu Login</p>
                    <a class="navbar-brand fw-bold" href= '/bank-me'>
                        <img src="../assets/images/logo.png" alt="Logo" width="34" height="42"> bank.me
                    </a>
                </div>
        
            </nav>
        
                <div class="rrow mb-1 mx-1 form-custom">
                    <form>
        
                        <div class="col form-custom">
                            <p class="p text-dark"> Digite seu email :</p>
                            <input type="text" class="form-control" placeholder="Enter email" name="email">
                        </div>
        
                        <div class="col form-custom">
                            <p class="p text-dark"> Digite sua senha :</p>
                            <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                        </div>
        
        
                        <div class="col form-custom">
                            <div>
                                <button class="btn btn-dark "> enviar </button>
                            </div>
                        </div>
        
        
                    </form>
                </div>
        
        
        
        </body> 
        </html> 
        HTML;
    }
}