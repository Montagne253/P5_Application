<?php 
class Autoloader{

    static function register(){
        sql_autoload_register(array(__CLASS__ ,'autoloader'));
    }


    static function autoload($class) {
        
        $class_name = str_replace('Montagne\Projet5\App\Model\\', '', $class);
        
        require '' . $class_name . '.php';
    }


}