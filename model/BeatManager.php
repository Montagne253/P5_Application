<?php

namespace Montagne\Projet5\App\Model;



class BeatManager extends Manager
{

    
    public function get($id) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, id_profil, title, genre, audio, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM beat WHERE id = ?');
        $req->execute(array(
            $id
        ));
        $data = $req->fetch();
      
        if ($data) {
        return new Beat($data);
        }
        else {
            return false;
        }


       
    }

    
    public function getList($id) {

        $db = $this->dbConnect();
        
        $beats = [];
    
        $req = $db->prepare('SELECT id, id_profil, title, genre, audio, DATE_FORMAT(date_creation, \'%d-%m-%Y\') AS date_creation FROM beat WHERE id_profil = ? ORDER BY date_creation DESC');
        
        $req->execute(array(
            $id
        ));
        
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
        
            $beats[] = new Beat($data);
        }
        
        return $beats;
        
    }

    public function add(Beat $beat)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO beat (id_profil, title, genre, audio, date_creation) VALUES(?, ?, ?, ?, NOW())');
            $req->execute(array(
                $beat->idProfil(),
                $beat->title(),
                $beat->genre(),
                $beat->audio()

            ));
            
    }

   
    public function delete($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM beat WHERE id = ?');
        $req->execute([
            $id
        ]);
    }

 
    

    
    
    
  
}