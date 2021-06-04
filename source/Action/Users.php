<?php

namespace Source\Action;

class Users {

    private $filtro;

    public function __construct() {
        $filtro = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
        $this->filtro = $filtro;
    }

    public function create() {

        if (!empty($this->filtro)) {


            //transforma a senha em uma hash
            $pass = password_hash($this->filtro["password"], CONF_PASSWD_ALGO);
            $this->filtro["password"] = $pass;

            //verifica existencia de um usuario
            $read = new \Source\Models\Read();
            $read->ExeRead("df_users", "WHERE email = :a", "a={$this->filtro["email"]}");
            $read->getResult();
            if ($read->getResult()) {
                echo "<div class='alert alert-danger'> Já existe um usuário cadastrado com email <b> {$this->filtro["email"]} </b> </div>";
                return;
            }

            if (empty($this->filtro["first_name"])) {
                echo "<div class='alert alert-warning'> Voce precisa preencher o nome do usuario </div>";
                return;
            }

            if (empty($this->filtro["last_name"])) {
                echo "<div class='alert alert-warning'> Voce precisa preencher o sobrenome do usuario </div>";
                return;
            }

            if (empty($this->filtro["level"])) {
                echo "<div class='alert alert-warning'> Voce precisa selecionar o nivel de usuario</div>";
                return;
            }


            //verifica se o email é valido
            $email = filter_var($this->filtro['email'], FILTER_VALIDATE_EMAIL);
            if ($email == false) {
                echo $message = "<div class=\"alert alert-warning\" role=\"alert\">
                Você precisa informar um e-mail válido; </div>";
                return;
            }

            if (empty($this->filtro["password"])) {

                echo "<div class='alert alert-warning'> Voce precisa informar uma senha</div>";
                return;
            }



            $cad = new \Source\Models\Create();
            $cad->ExeCreate("df_users", $this->filtro);
            $cad->getResult();
            if ($cad->getResult()) {
                echo "<div class='alert alert-success'>Usuário <b> cadastrado </b> com sucesso ! </div>";

                //envia e-mail de boas vindas
                $view = new \Source\Controller\View(__DIR__ . "/../../themes/mail");
                $message = $view->render("confirm",
                        [
                            "first_name" => $this->filtro["first_name"],
                            "confirm_link" => CONF_URL_BASE . "/confirma&email={$this->filtro['email']}"
                ]);

                $envia = new \Source\Controller\Email();
                $envia->bootstrap(
                        "Seja bem vindo",
                        $message,
                        $this->filtro["email"],
                        $this->filtro["first_name"])->send();

                if ($envia->send()) {
                    echo "<div class='alert alert-success'>E-amil enviado com sucesso </div>";
                } else {
                    echo "<div class='alert alert-danger'>Erro ao enviar e-mail </div>";
                }
            } else {
                echo "<div class='alert alert-danger'><b> ERRO </b> ao  cadastrar usuário ! </div>";
            }
        }
    }

    public function delete() {

        $filtroget = filter_input(INPUT_GET, "del", FILTER_VALIDATE_INT);

        $del = new \Source\Models\Delete();
        $del->ExeDelete("df_users", 'WHERE id = :a', "a={$filtroget}");
        $del->getResult();
        if ($del->getResult()) {
            echo "<div class='alert alert-success'> Arquivo deletado com sucesso </div>";
        } else {
            echo "<div class='alert alert-danger'> Erro ao deletar usuário </div>";
        }
    }

    public function update() {

        $filtroget = filter_input(INPUT_GET, "up", FILTER_VALIDATE_INT);

        if (!empty($this->filtro)) {

            $update = new \Source\Models\Update();
            $update->ExeUpdate("df_users", $this->filtro, "WHERE id = :a", "a={$this->filtro["id"]}");
            $update->getResult();
            if ($update->getResult()) {
                echo "<div class='alert alert-success'> Usuário atualizado com sucesso </div>";
            } else {
                echo "<div class='alert alert-danger'> Erro ao atualziar usuario </div>";
            }
        }
      //  var_dump($filtroget, $this->filtro);
    }

}
