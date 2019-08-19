<?php 
session_start();


require 'model/Autoloader.php';


spl_autoload_register(array('Autoloader', 'autoload'));

require('controller/controller.php');

$controller = new Montagne\Projet5\App\Controller\controller;



try { 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') 
        {
            $controller->index();
        } 
        elseif ($_GET['action'] == 'listProfil') 
        {
            $controller->listProfil();
        } 
        elseif ($_GET['action'] == 'connexion') 
        {
            $controller->connexion();
        }
        elseif ($_GET['action'] == 'profil')
        {
            $controller->profil();
        }
        elseif ($_GET['action'] == 'publicProfil')
        {
            $controller->publicProfil();
        }
        elseif ($_GET['action'] == 'beatmakers')
        {
            $controller->beatmakers();
        }
        elseif ($_GET['action'] == 'editAvatar')
        {
            $controller->editAvatar();
        }
        elseif ($_GET['action'] == 'editProfil')
        {
            $controller->editProfil();
        }
        elseif ($_GET['action'] == 'beat')
        {
            $controller->beat();
        }
        elseif ($_GET['action'] == 'editBeat')
        {
            $controller->editBeat();
        }
        elseif ($_GET['action'] == 'signin')
        {
            $controller->signin();
        }

        elseif ($_GET['action'] == 'pageProfil')
        {
            $controller->pageProfil();
        }

        elseif ($_GET['action'] == 'upload')
        {
            
            $controller->upload();
        }
        elseif ($_GET['action'] == 'deconnexion')
        {
            $controller->deconnexion();
        }
        else {
            $controller->error();
        }
    }
    else {
            $controller->index();
    }
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
    require('view/errorView.php');
}



?>