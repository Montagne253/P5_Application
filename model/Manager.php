<?php

namespace Montagne\Projet5\App\Model;


class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=mh;charset=utf8', 'root', '');
        //Connexion en ligne => 
        //$db = new \PDO('mysql:host=yamaovhcfkbase.mysql.db;dbname=yamaovhcfkbase;charset=utf8', 'yamaovhcfkbase', 'Protect253');
        //$db = new \PDO('mysql:host=db5000101610.hosting-data.io;dbname=dbs96100;charset=utf8', 'dbu310392', 'Protect.253');
        return $db;
    }
}