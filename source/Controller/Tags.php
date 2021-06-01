<?php

namespace Source\Controller;

class Tags {

    public function __construct() {
        $this->tags();
    }

    public function tags() {

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
            $tag = " 
          <title> " . CONF_SITE_NAME . " </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
        } else {

            if ($par1 == "blog") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "contato") {
                 $tag = " 
          <title>:: Contato:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "cadastro") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "pagamento") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "cadastro") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "carrinho") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "produtos" && !empty($trata['3'])) {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "produtos") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "categoria" && !empty($par2)) {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 == "categoria") {
                  $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }

            if ($par1 <> "") {
                 $tag = " 
          <title>:: Blog:: " . CONF_SITE_NAME . "  </title>      
        <meta name=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta name=\"robots\" content=\"index, follow\">

        <link rel=\"canonical\" href=\"" . CONF_SITE_IMG . "/\">

        <meta itemprop=\"name\" content=\"" . CONF_SITE_NAME . "\">
        <meta itemprop=\"description\" content=\"" . CONF_SITE_DESC . "\">
        <meta itemprop=\"image\" content=\"" . CONF_SITE_IMG . "\">
        <meta itemprop=\"url\" content=\"" . CONF_URL_BASE . "" . $_SERVER["REQUEST_URI"] . "/\">

        <meta property=\"og:url\" content=\"" . $_SERVER["REQUEST_URI"] . "\"  />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"" . CONF_SITE_TITLE . "\" />
        <meta property=\"og:description\" content=\"" . CONF_SITE_DESC . "\" />
        <meta property=\"og:image\" content=\"" . CONF_SITE_IMG . "\" />

";
            return $tag;
            }
        }
    }

}
