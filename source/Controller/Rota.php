<?php

namespace Source\Controller;

class Rota {

    private $rota;

    public function __construct() {

        $this->rota();
    }

    public function rota() {

        $url = $_SERVER["REQUEST_URI"];

        $trata = explode("/", $url);

        if ($trata["0"] == "") {
            $par1 = $trata["2"];
            if(!empty($trata["3"])){
            $par2 = $trata["3"];
            }
        } else {
            $par1 = $trata["1"];
            $par2 = $trata["2"];
        }


        if ($par1 == "") {
            include './themes/default/home.php';
        } else {

            if ($par1 == "blog") {
                include './themes/default/blog.php';
                return;
            }

            if ($par1 == "contato") {
                include './themes/default/contact.php';
                return;
            }

            if ($par1 == "cadastro") {
                include './themes/default/create.php';
                return;
            }

            if ($par1 == "pagamento") {
                include './themes/default/payment.php';
                return;
            }

            if ($par1 == "cadastro") {
                include './themes/default/create.php';
                return;
            }

            if ($par1 == "carrinho") {
                include './themes/default/car.php';
                return;
            }

            if ($par1 == "cursos" && !empty($par2)) {
                include './themes/default/single_product.php';
                return;
            }

            if ($par1 == "cursos") {
                include './themes/default/products.php';
                return;
            }

            if ($par1 == "categoria" && !empty($par2)) {
                include './themes/default/single_category.php';
                return;
            }

            if ($par1 == "categoria") {
                include './themes/default/category.php';
                return;
            }

            if ($par1 <> "") {
                include './themes/default/single.php';
                return;
            }
        }
    }

}
