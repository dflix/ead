<?php


namespace Source\Models;


class Conn {

    private static $Host = CONF_DB_HOST;
    private static $User = CONF_DB_USER;
    private static $Pass = CONF_DB_PASS;
    private static $Dbsa = CONF_DB_NAME;

    /** @var PDO */
    private static $Connect = null;

    /**     * Conecta com o banco de dados com o pattern singleton. * Retorna um objeto PDO! */
    private static function Conectar() {
        try {
            if (self::$Connect == null):
                
                $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Connect = new \PDO($dsn, self::$User, self::$Pass, $options);
            endif;
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die;
        }
        self::$Connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
        
        var_dump($e);
        
    }

    /** Retorna um objeto PDO Singleton Pattern. */
    function getConn() {
       
        return self::Conectar();
        
    }

}

