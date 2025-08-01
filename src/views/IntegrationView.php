<?php
namespace Views;

class IntegrationView
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
        
                body {
                    font-family: 'Arial', sans-serif;
                    background-color: #f9f9f9;
                    color: #111;
                }
        
                h1 {
                    font-size: 50px;
                    font-weight: 700;
                }
        
                .container-custom {
                    margin: 100px 120px;
                }
        
                .navbar-custom .navbar-collapse {
                    flex-grow: 1;
                    justify-content: center;
                }
        
                .navbar-custom .auth-links {
                    margin-left: auto;
                }
        
                .navbar-custom {
                    margin: 40px 100px;
                    border-radius: 16px;
                    padding: 25px 40px;
                }
        
                .icon-check {
                    width: 24px;
                    height: 24px;
                    margin-right: 8px;
                }
        
                .card-img {
                    width: 650px;
                    height: 650px;
                }
        
                .footer-custom {
                    padding: 40px 100px;
                }
        
                .footer-links {
                    display: flex;
                    justify-content: center;
                    gap: 20px;
                }
        
                .footer-links a {
                    color: #aaa;
                    text-decoration: none;
                    font-size: 16px;
                    transition: color 0.3s ease;
                }
        
                .footer-links a:hover {
                    color: #ffd700;
                }
        
                .footer-info {
                    font-size: 14px;
                    color: #777;
                }
        
                @media (max-width: 1000px) {
                    .card-img {
                        display: none;
                    }
                }
            </style>
        </head>
        
        <body>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
                <div class="container-fluid">
                    <a class="navbar-brand" href='/bank-me'>
                     <a href='/bank-me' > <img src="assets/images/logo.png" alt="Logo" width="34" height="42"> bank.me</a>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href='/bank-me/Product'>Product</a></li>
                            <li class="nav-item"><a class="nav-link" href='/bank-me/Feacture'>Features</a></li>
                            <li class="nav-item"><a class="nav-link" href='/bank-me/Integration'>Integration</a></li>
                            <li class="nav-item"><a class="nav-link" href='/bank-me/Resource'>Resource</a></li>
                        </ul>
        
                        <div class="d-flex auth-links">
                            <a class="btn btn-warning me-2" href='/bank-me/Login'>Login</a>
                            <a class="btn btn-light" href='/bank-me/Register'>Register</a>
                        </div>
                    </div>
        
                </div>
            </nav>
        
            <!-- Offcanvas Menu -->
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasMenu">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link text-white" href='/bank-me/Product'>Product</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href='/bank-me/Feacture'>Features</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href='/bank-me/Integration'>Integration</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href='/bank-me/Resource'>Resource</a></li>
                        <li class="nav-item mt-3"><a class="btn btn-warning w-100" href='/bank-me/Login'>Login</a></li>
                        <li class="nav-item mt-2"><a class="btn btn-light w-100" href='/bank-me/Register'>Register</a></li>
                    </ul>
                </div>
            </div>
        
            <div class="container"> 
                <span> Integration </span> 
            </div> 
        
        
        
        
        
                <!-- Footer -->
                <footer class="bg-dark text-white py-4 mt-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <!-- Menu Links -->
                            <div class="col-12 mb-3">
                                <div class="Product.htmlooter-links">
                                    <a href='/bank-me/Product' class="text-white me-4">Product</a>
                                    <a href='/bank-me/Feacture' class="text-white me-4">Features</a>
                                    <a href='/bank-me/Integration' class="text-white me-4">Integration</a>
                                    <a href='/bank-me/Resource' class="text-white">Resource</a>
                                </div>
                            </div>
                            <!-- Logo -->
                            <div class="col-12 mb-3">
                                <div class="footer-logo d-flex justify-content-center align-items-center">
                                    <img src="assets/images/logo.png" alt="Bank.me Logo" width="28" height="28" />
                                    <span class="ms-2 fs-4 fw-bold">bank.me</span>
                                </div>
                            
                            </div>
                            <!-- Info -->
                            <div class="col-12">
                                <p class="footer-info mb-0">© 2025 Bank.me. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </footer>
            
            </body>
            
            </html>
HTML;

    }
}