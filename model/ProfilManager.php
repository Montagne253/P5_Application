<?php

namespace Montagne\Projet5\App\Model;

//use Montagne\Projet5\App\Model\Profil;


//require_once('model/Manager.php');

class ProfilManager extends Manager
{

    public function add(Profil $profil)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO profil (pseudo, email, genre, pass, date_creation) VALUES(?, ?, ?, ?, NOW())');
            
            $req->execute(array(
                $profil->pseudo(),
                $profil->email(),
                $profil->genre(),
                $profil->pass()
            ));
    }

    public function get($id) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM profil WHERE id = ?');
        $req->execute(array(
            $id
        ));
        $data = $req->fetch();
        

        return new Profil($data);
    }

    public function getList() 
    {
        $db = $this->dbConnect();
        $profils = [];
    
        $req = $db->query('SELECT id, pseudo, email, genre, story, avatar, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM profil ORDER BY date_creation DESC ');
        while ($data = $req->fetch()) {
            $profils[] = new Profil($data);
        }
        return $profils;
        
    }

    public function getShortList() 
    {
        $db = $this->dbConnect();
        $profils = [];
    
        $req = $db->query('SELECT id, pseudo, email, genre, story, avatar, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM profil ORDER BY date_creation DESC LIMIT 0, 3');
        while ($data = $req->fetch()) {
            $profils[] = new Profil($data);
        }
        return $profils;
        
    }

    public function getPseudo($pseudo) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM profil WHERE pseudo = ?');
        $req->execute(array(
            $pseudo
        ));
        $data = $req->fetch();

        if ($data) 
        {
            return new Profil($data);
        }
        else
        { 
            return false;
        }
    }

    public function addStory(Profil $profil)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE profil SET story = :story, date_modification = NOW() WHERE id = :id');
            
            $req->execute(array(
                "story" => $profil->story(),
                
                "id" => $profil->id()
            ));
    }

    public function update(Profil $profil)
    {
        $db = $this->dbConnect();
    
        $req = $db->prepare('UPDATE profil SET pseudo = :pseudo, email = :email, pass = :pass, genre = :genre, story = :story, date_modification = NOW() WHERE id = :id');
        $req->execute(array(
           "pseudo" => $profil->pseudo(),
           "email" => $profil->email(),
           "pass" => $profil->pass(),
           "genre" => $profil->genre(),
           "story" => $profil->story(),
           "id" => $profil->id()
        ));
    }

    public function updateAvatar(Profil $profil)
    {
        $db = $this->dbConnect();
    
        $req = $db->prepare('UPDATE profil SET avatar = :avatar WHERE id = :id');
        $req->execute(array(
           "avatar" => $profil->avatar(),
           "id" => $profil->id()
        ));
    }

    public function countLine() {

        $db = $this->dbConnect();
        
        $req = $db->query('SELECT id FROM profil');
        return $req->rowCount();



    }

    public function displayProfilPagination($start, $perPage) {

        $db = $this->dbConnect();

        $profils = [];

        $profil = $db->query('SELECT id, pseudo, email, genre, story, avatar, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM profil  ORDER BY id DESC LIMIT '.$start.','.$perPage);
        while ($data = $profil->fetch()) {
            $profils[] = new Profil($data);
        }
        return $profils;
    
        //return $profil;
    }


    
    /*public function pageProfil() {

        $db = $this->dbConnect();
        $profils = [];
       
        
        
        $req = $db->query('SELECT * FROM profil ORDER BY id DESC');
        while($data = $req->fetch()) {
            $profils[] = new Profil($data);
        }
        return $profils;
    


    }
    /*public function addAvatar(Profil $profil)
    {
        $db = $this->dbConnect();
    
        $req = $db->prepare('UPDATE profil SET pseudo = :pseudo, email = :email, pass = :pass, genre = :genre, story = :story, date_modification = NOW(), avatar = :avatar  WHERE id = :id');
        $req->execute(array(
           "pseudo" => $profil->pseudo(),
           "email" => $profil->email(),
           "pass" => $profil->pass(),
           
           "avatar" => $profil->avatar(),
           "id" => $profil->id()
        ));
    }*/
}