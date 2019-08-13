<?php

namespace Montagne\Projet5\App\Model;

class Beat
{
    private $_id;
    private $_idProfil;
    private $_title;
    private $_genre;
    private $_audio;
    private $_dateCreation;
    

    public function __construct(Array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(Array $data) 
    {
        
        if(isset($data['id']))
        {
            $this->setId($data['id']);
        }
        if(isset($data['id_profil']))
        {
            $this->setIdProfil($data['id_profil']);
        }
        if(isset($data['title']))
        {
            $this->setTitle($data['title']);
        }
        if(isset($data['genre']))
        {
            $this->setGenre($data['genre']);
        }
        if(isset($data['audio']))
        {
            $this->setAudio($data['audio']);
        }
        if(isset($data['date_creation']))
        {
            $this->setDateCreation($data['date_creation']);
        }
    }

    public function id()
    {
        return $this->_id;

    }
    public function idProfil()
    {
        return $this->_idProfil;

    }
    public function title()
    {
        return $this->_title;

    }
    public function genre()
    {
        return $this->_genre;

    }
    public function audio()
    {
        return $this->_audio;

    }
    public function dateCreation()
    {
        return $this->_dateCreation;
    }

    public function setId($id)
    {
         $this->_id = $id;
    }
    public function setIdProfil($idProfil)
    {
         $this->_idProfil = $idProfil;
    }
    public function setTitle($title)
    {
         $this->_title = $title;
    }
    public function setGenre($genre)
    {
         $this->_genre = $genre;
    }
    public function setAudio($audio)
    {
         $this->_audio = $audio;
    }
    public function setDateCreation($dateCreation)
    {
         $this->_dateCreation = $dateCreation;
    }
}