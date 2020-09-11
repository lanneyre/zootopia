<?php

/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre cet autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à la classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        $interface = 'app/' . $class . '.int.php';
        $classe = 'app/' . $class . '.class.php';
        if(file_exists($interface))
            require_once $interface;
        if(file_exists($classe))
            require_once $classe;
    }

}