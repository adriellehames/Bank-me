<?php

namespace Core;

class Autoloader {
    public static function register() {
        spl_autoload_register(function ($class) {
            // Converte o namespace para o caminho do arquivo
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            $file = __DIR__ . '/../../src/' . $file;

            // Verifica se o arquivo existe
            if (file_exists($file)) {
                require_once $file;
                return true;
            }
            return false;
        });
    }
}