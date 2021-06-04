<?php

namespace Source\Action;

class Post {

    private $filtro;

    public function __construct() {
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $this->filtro = $filtro;
    }

    public function cadastra() {

        if (!empty($this->filtro)) {

            if (!empty($_FILES["image"])) {
                $Image = $_FILES["image"];
            }

            $slug = \Source\Controller\Check::Name($this->filtro["title"]);

            $upload = new \Source\Controller\Upload(__DIR__ . "/../../uploads/");
            $upload->Image($Image);
            $upload->getResult();
            if ($upload->getResult()) {
                // echo "<div class='alert alert-success'>Upload realizado com sucesso</div>";

                $Dados = [
                    "title" => $this->filtro["title"],
                    "description" => $this->filtro["description"],
                    "content" => $this->filtro["content"],
                    "slug" => $slug,
                    "image" => $upload->getResult()
                ];
            } else {
                // echo "<div class='alert alert-danger'>Erro ao realizar upload</div>"; 

                $Dados = [
                    "title" => $this->filtro["title"],
                    "description" => $this->filtro["description"],
                    "content" => $this->filtro["content"],
                    "slug" => $slug
                ];
            }

            $create = new \Source\Models\Create();
            $create->ExeCreate("df_post", $Dados);
            $create->getResult();
            if ($create->getResult()) {
                echo "<div class='alert alert-success'> Post cadastrado com sucesso </div>";
            } else {
                echo "<div class='alert alert-danger'> Erro ao cadastrar post </div>";
            }
        }
    }

}
