<?php
class RegisterView {
    private $message = '';
    private $messageType = '';

    public function render($message = '', $messageType = '') {
        $this->message = $message;
        $this->messageType = $messageType;

        $messageStyle = $this->message ? 'display: block;' : 'display: none;';
        $messageClass = $this->messageType === 'success' ? 'alert-success' : 'alert-danger';

        return <<<HTML
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bank.me - Pré-registro</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .navbar-custom {
                    margin: 40px 100px;
                    border-radius: 16px;
                    padding: 25px 40px;
                }
                .form-container {
                    max-width: 1000px;
                    margin: 40px auto;
                    padding: 40px 60px;
                    background-color:rgba(228, 230, 233, 0.86);
                    border-radius: 16px;
                }
                .form-row {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 20px;
                }
                .form-group {
                    margin-bottom: 15px;
                }
                .form-control {
                    max-width: 400px;
                }
                .message-container {
                    max-width: 1200px;
                    margin: 20px auto;
                    padding: 0 20px;
                }
                @media (max-width: 768px) {
                    .form-row {
                        grid-template-columns: 1fr;
                    }
                    .navbar-custom {
                        margin: 20px;
                    }
                }
            </style>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
                <div class="col p-2 d-flex justify-content-between align-items-center fs-4">
                    <p class="text-white mb-0">Efetue seu Pré-registro</p>
                    <a class="navbar-brand fw-bold" href="../index.html">
                        <img src="./assets/images/logo.png" alt="Logo" width="34" height="42"> bank.me
                    </a>
                </div>
            </nav>

            <div class="message-container">
                <div class="alert {$messageClass}" style="{$messageStyle}" role="alert">
                    {$this->message}
                </div>
            </div>

            <div class="form-container">
                <form action="/bank-me/registerPost" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="left-column">
                            <div class="form-group">
                                <label class="form-label fw-bold">Nome</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Sobrenome</label>
                                <input type="text" class="form-control" name="surname" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">CPF</label>
                                <input type="text" class="form-control" name="cpf" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">RG</label>
                                <input type="text" class="form-control" name="rg" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Data de Nascimento</label>
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">CEP</label>
                                <input type="text" class="form-control" name="postal_code" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Estado</label>
                                <input type="text" class="form-control" name="state" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Cidade</label>
                                <input type="text" class="form-control" name="city" required>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="form-group">
                                <label class="form-label fw-bold">Bairro</label>
                                <input type="text" class="form-control" name="district" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Endereço</label>
                                <input type="text" class="form-control" name="adress" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Número</label>
                                <input type="text" class="form-control" name="number" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Complemento</label>
                                <input type="text" class="form-control" name="complement">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Renda Mensal</label>
                                <input type="number" class="form-control" name="monthly_income">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Profissão</label>
                                <input type="text" class="form-control" name="profession">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Telefone</label>
                                <input type="tel" class="form-control" name="telephone" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Foto do Documento</label>
                                <input type="file" class="form-control" name="document_photo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-center mt-4">
                        <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Enviar</button>
                        <a href="/bank-me/pages/login.html" class="btn btn-outline-dark px-4 py-2">Ir para Login</a>
                    </div>
                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
HTML;
    }
}
?>