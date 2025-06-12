 


//namespace Controllers;

///use core\Database;

//class UploadController
{/*
    private $targetDir = "UploadImages";
    private $targetFile;
    private $uploadOk = 1;
    private $imageFileType;
    private $fileName;
    private $fileInputName;

    public function __construct($fileInputName = "document_photo")
    {
        if (!isset($_FILES[$fileInputName])) {
            throw new \Exception("Nenhum arquivo enviado.");
        }

        $this->fileInputName = $fileInputName;
        $this->fileName = basename($_FILES[$fileInputName]["document_photo"]);
        $this->targetFile = $this->targetDir . '/' . $this->fileName;
        $this->imageFileType = strtolower(pathinfo($this->targetFile, PATHINFO_EXTENSION));
    }

    //Verifica o tamanho do arquivo
    public function UploadSize()
    {
        if ($_FILES[$this->fileInputName]["size"] > 5000000) {
            echo "O arquivo ultrapassa o tamanho máximo aceito (500kb).<br>";
            $this->uploadOk = 0;
        }
    }

    //Verifica se o tipo de documento é aceito
    public function UploadType()
    {
        if (
            $this->imageFileType != "jpg" &&
            $this->imageFileType != "png" &&
            $this->imageFileType != "jpeg" &&
            $this->imageFileType != "pdf"
        ) {
            echo "Tipo de arquivo não aceito";
            $this->uploadOk = 0;
        }
    }

    //caso esteja tudo certo vai mover o arquivo para sua pasta destino 
    public function MoveUpload()
    {
        if ($this->uploadOk == 0) {
            echo "Infelizmente houve um erro no seu upload";
        } else {
            if (move_uploaded_file($_FILES[$this->fileInputName]["tmp_name"], $this->targetFile)) {
                echo "Seu arquivo foi enviado com sucesso";
            } else {
                echo "Infelizmente houve um erro no upload do seu arquivo";
            }
        }
    }


    //Conectar com banco de dados
    public function salvarNoBanco(Database $db)
    {
        $query = "INSERT INTO uploads (nome_arquivo, caminho_arquivo) VALUES (:nome, :caminho)";
        $params = [
            ':nome' => $this->fileName,
            ':caminho' => $this->targetFile
        ];

        try {
            $db->executeQuery($query, $params);
            echo "Arquivo salvo no banco de dados com sucesso!<br>";
        } catch (\PDOException $e) {
            echo "Erro ao salvar no banco: " . $e->getMessage();
        }
    }

   




}
?>
*/