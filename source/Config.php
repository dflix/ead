<?php

/**
 * DATABASE
 */

    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "dflix");



/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.localhost/ead");
define("CONF_URL_THEME", "https://www.localhost/ead/themes/default");


/**
 * SITE
 */
define("CONF_SITE_NAME", "EAD Escola Ensino a Distância");
define("CONF_SITE_TITLE", "Sistema de gestão EAD , escola de ensino a distância");
define("CONF_SITE_DESC",
        "O DflixControl é um sistema de gestão para administração e gestão de uma escola de ensino a distância");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_IMG", "https://www.upinside.com.br/projects/html5_css3/_img/post.jpg");
define("CONF_SITE_DOMAIN", "dflixcontrol.com.br");
define("CONF_SITE_ADDR_STREET", "Av Itajuibe");
define("CONF_SITE_ADDR_NUMBER", "545");
define("CONF_SITE_ADDR_COMPLEMENT", "Apto 22 Bloco C");
define("CONF_SITE_ADDR_CITY", "São Paulo");
define("CONF_SITE_ADDR_STATE", "SP");
define("CONF_SITE_ADDR_ZIPCODE", "08120-470");

/**
 * SOCIAL
 */
//define("CONF_SOCIAL_TWITTER_CREATOR", "@robsonvleite");
//define("CONF_SOCIAL_TWITTER_PUBLISHER", "@robsonvleite");
//define("CONF_SOCIAL_FACEBOOK_APP", "626590460695980");
//define("CONF_SOCIAL_FACEBOOK_PAGE", "upinside");
//define("CONF_SOCIAL_FACEBOOK_AUTHOR", "robsonvleiteoficial");
//define("CONF_SOCIAL_GOOGLE_PAGE", "107305124528362639842");
//define("CONF_SOCIAL_GOOGLE_AUTHOR", "103958419096641225872");
//define("CONF_SOCIAL_INSTAGRAM_PAGE", "robsonvleite");
//define("CONF_SOCIAL_YOUTUBE_PAGE", "upinside");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "default");
define("CONF_VIEW_APP", "http://www.localhost/ead/themes/admin");
//define("CONF_VIEW_APP", "cafeapp");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "mail.bembomdelivery.com.br");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "contato@bembomdelivery.com.br");
define("CONF_MAIL_PASS", "dflix7778");
define("CONF_MAIL_SENDER", ["name" => "EAD Plataforma de Ensino", "address" => "contato@bembomdelivery.com.br"]);
define("CONF_MAIL_SUPPORT", "contato@bembomdelivery.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

/**
 * PAGAR.ME
 */
define("CONF_PAGARME_MODE", "test");
define("CONF_PAGARME_LIVE", "ak_live_0nL1a8rxod3NA4D2OLw8jlG1ydNS8R");
define("CONF_PAGARME_TEST", "ak_test_0nL1a8rxod3NA4D2OLw8jlG1ydNS8R");
define("CONF_PAGARME_BACK", CONF_URL_BASE) . "/pay/callback";

