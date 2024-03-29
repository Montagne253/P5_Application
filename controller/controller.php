<?php 

namespace Montagne\Projet5\App\Controller;


use Montagne\Projet5\App\Model\Profil;
use Montagne\Projet5\App\Model\Beat;
use Montagne\Projet5\App\Model\ProfilManager;
use Montagne\Projet5\App\Model\BeatManager;



class Controller {

    function index()
    {

        $profilManager = new  profilManager;
        $profils = $profilManager->getShortList();

        require('view/indexView.php');
        
    }


    
    function profil()
    {
        if(isset($_SESSION['id'])) {

            $ProfilManager = new ProfilManager;
            $profil = $ProfilManager->get($_SESSION['id']);

            

            if(isset($_SESSION['id']) AND $profil->id() == $_SESSION['id'])
            {
                
                
            }


               

            $beatManager = new BeatManager;
            $beats = $beatManager->getList($_SESSION['id']);

    
        }
        else 
        {
            header('Location: index.php?action=connexion');
        }

        require('view/profilView.php');

    }

   
    function editBeat()
    {
        $ProfilManager = new ProfilManager;
        $profil = $ProfilManager->get($_SESSION['id']);

        $beatManager = new BeatManager;
        $beats = $beatManager->getList($_SESSION['id']);

        if(isset($_GET['beat']) AND !empty($_GET['beat'])) {

            $beatId = htmlspecialchars($_GET['beat']);

            $delete = new BeatManager;
            $beat = $delete->delete($beatId);

           

            header("Location: index.php?action=editBeat&profil=". $_SESSION['id']);

        }

        
        


        require('view/editBeatView.php');

    }

    function publicProfil()
    {
        $profilManager = new ProfilManager;
        $profil = $profilManager->get($_GET['profil']);

        
        $beatManager = new BeatManager;
        $beats = $beatManager->getList($_GET['profil']);
        
        require('view/publicProfilView.php');
        

    }


    function pageProfil() {

        $perPage = 4;
        
        $profilManager = new ProfilManager;
        $profilTotal = $profilManager->countLine();
        
        
        $totalPages = ceil($profilTotal/$perPage);

        if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $totalPages) {
            $_GET['page'] = intval($_GET['page']);
            $courantPage = $_GET['page'];

            $start = ($courantPage-1)*$perPage;

            
            $profilManager = new ProfilManager;
            $profils = $profilManager->displayProfilPagination($start, $perPage);

            

        } else {
            $courantPage = 1;
        }


        require('view/pageProfilView.php');

    }


    

    function listProfil()
    {

        $profilManager = new ProfilManager;
        $profils = $profilManager->getList();

        require('view/beatmakersView2.php');
        
    }

    function upload() { 


        if (!empty($_POST['upload'])) 
        {

    
        
            if(isset($_POST['title'], $_POST['genre'])) 
            {

                $genre = htmlspecialchars($_POST['genre']);
                $title = htmlspecialchars($_POST['title']);
                $audio = $_FILES['audio'];
            

                if(isset($_FILES['audio']) AND !empty($_FILES['audio']['name']))
                {
                    
                    $sizeMax = 12000000;
                    $extensionsValid = array('mp3');
                    if($_FILES['audio']['size'] <= $sizeMax) 
                    {
                        $extensionUpload = strtolower(substr(strrchr($_FILES['audio']['name'], '.'), 1));
                        if(in_array($extensionUpload, $extensionsValid))
                        {
                            $renameAudio = $title.".".$extensionUpload ;
                            $wayFile = "profils/audio/" . $renameAudio;
                            $resultAudio = move_uploaded_file($_FILES['audio']['tmp_name'], $wayFile);
                            
                            if($resultAudio)
                            {

                                $beat = new Beat([
                                    "id_profil" => $_SESSION['id'], 
                                    "title" => $title, 
                                    "genre" => $genre,
                                    "audio" => $renameAudio
                                ]);
                    
                                $beatManager = new BeatManager;
                                $beatManager->add($beat);

                                $_SESSION['flash'] = "You have uploaded your file successfully";
                                
                                header('Location: index.php?action=profil&id='.$_SESSION['id']);

                            }
                        } else 
                        {
                            $_SESSION['flash'] ="Your file must be of format: mp3";
                        }
                        
                    } else
                    {
                        $_SESSION['flash'] = "Your file must not exceed 12 MB";
                    }
                }
            }
        
            
        }


        require('view/PostBeatView.php');

    }

    function editAvatar() 
    {
        if(isset($_SESSION['id']))
        {

            $ProfilManager = new ProfilManager;
            $profil = $ProfilManager->get($_SESSION['id']);

            $avatar = $_FILES['avatar'];

            if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
            {
                $sizeMax = 5097152;
                $extensionsValid = array('jpg', 'jpeg', 'gif', 'png');
                if($_FILES['avatar']['size'] <= $sizeMax) 
                {
                    $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                    if(in_array($extensionUpload, $extensionsValid))
                    {
                        $rename = $_SESSION['id'].".".$extensionUpload;
                        $way = "profils/avatars/" . $rename;
                        $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $way);
                        if($result)
                        {
                            
                            $avatarEdit = new Profil(array(
                                'avatar' => $rename,
                                'id' => $_SESSION['id']
                            ));
                            $avatarChange = new ProfilManager();
                            $avatarChange->updateAvatar($avatarEdit);

                            

                            $_SESSION['flash'] = "Your avatar has been modified !";

                            header('Location: index.php?action=profil&id='.$_SESSION['id']);
                            
                        }
                    }
                    else ($extensionValid != array('jpg', 'jpeg', 'gif', 'png'));
                    {
                        $_SESSION['flash'] = "Your image must be in format: jpg, jpeg or png";
                    }
                }
                else 
                {
                    $_SESSION['flash']  = "Your avatar must not exceed 5,09 MB";
                }
            }

                    
            

        }
         

        require('view/profilView.php');

    }

    function editProfil()
    {
        if(isset($_SESSION['id']))
        {
        

            $ProfilManager = new ProfilManager;
            $profil = $ProfilManager->get($_SESSION['id']);

            if(isset($_POST['newpseudo'], $_POST['newemail'], $_POST['newmdp']) AND !empty($_POST['newpseudo'])) 
            {
                
                $newpseudo = htmlspecialchars($_POST['newpseudo']);
                $newemail = htmlspecialchars($_POST['newemail']);
                $newmdp = $_POST['newmdp'];
                $confirm_password = $_POST['confirmnewmdp'];
                
                $hash_password = password_hash($newmdp, PASSWORD_BCRYPT);
                $genre = $_POST['genre'];
                $story = $_POST['story'];
                
               
                if($newmdp == $confirm_password) 
                {
                    
                $paul = new Profil(array(
                    'pseudo' => $newpseudo,
                    'email' =>  $newemail,
                    'pass' => $hash_password,
                    'genre' => $genre,
                    'story' => $story,
                    'id' => $_SESSION['id']
                ));
                $pierre = new ProfilManager();
                $pierre->update($paul);


                $_SESSION['flash'] = "Your profil has been modified !";


                header('Location: index.php?action=profil&id='.$_SESSION['id']);
                

                } else {
                    $error = "<i class='fas fa-exclamation-triangle'></i> YOUR PASSWORDS DO NOT MATCH <i class='fas fa-exclamation-triangle'></i>";
                }

            

            }
        } 

        require('view/editProfilView.php');
    }

    
    function connexion()
    {
        if(isset($_SESSION['id'])) {
            header('Location: index.php?action=profil&id='.$_SESSION['id']);
            exit();
        }
        
            if(isset($_POST['submitConnect'])) 
            {
                $pseudoConnect = htmlspecialchars($_POST['pseudoConnect']);
                $passwordConnect = $_POST['passwordConnect'];
                
                    
                if(!empty($pseudoConnect) AND !empty($passwordConnect))
                {
                    $ProfilManager = new ProfilManager;
                    $user = $ProfilManager->getPseudo($pseudoConnect);

                   
        
             
                    if($user) 
                    {
                    
                      

                        if(password_verify($passwordConnect, $user->pass()))
                        {
                            $_SESSION['id'] = $user->id();

                          
                        
                        header('Location: index.php?action=profil&id='.$_SESSION['id']);
        
                        }
                        else 
                        {
                            $_SESSION['flash'] = 'INVALID ACCOUNT<br>This pseudo or this passsword is incorrect or does\'nt exist.' ;
                        }
                    }
                    else 
                    {
                        $_SESSION['flash'] = "Wrong pseudo or incorrect password !";
                    }
                }
                else 
                {
                    $_SESSION['flash'] = 'Please fill out all field';  
                }   
            }

        require('view/connexionView.php');
        
    }


    function signin()
    {
        if (isset($_POST['signin'])) 
        {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $genre = htmlspecialchars($_POST['genre']);
            $pass = $_POST['pass'];
            $confirm_pass = $_POST['confirm_pass'];
            $hash_pass = password_hash($pass, PASSWORD_BCRYPT);
            
        
            if (!empty($_POST['signin'])) {

                $validation = true;

                if(empty($_POST['pseudo'])) {
                    $error_pseudo = 'Le pseudo est vide';
                    $validation = false;

                    if(strlen($pseudo) <= 20) {
                            

                    } else {
                        $error = 'Votre pseudo ne doit pas dépasser 20 caractéres !';
                    }

                }
                if(empty($_POST['email'])) {
                    $error_message = 'Email est vide';
                    $validation = false;
                }
                if($validation==true) {

                    if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['genre']) AND /*!empty($_POST['story']) AND*/ !empty($_POST['pass']) AND !empty($_POST['confirm_pass'])) 
                    {
                            
                        

                        if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
                        {
                    
                            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
                            {  
                            } else {
                                $error = 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
                            }


                            if($pass == $confirm_pass) 
                            {
                                $hash_pass = password_hash($pass, PASSWORD_BCRYPT);
                                
                        
                                    $newUser = new Profil([
                                        'pseudo' => $_POST['pseudo'],
                                        'email' => $_POST['email'],
                                        'genre' => $_POST['genre'],
                                        'pass' => $hash_pass
                                    ]);
                                    
                                    $profilManager = new ProfilManager;
                                    $profilManager->add($newUser);
                                
                                session_start();
                                $_SESSION = array();
                                session_destroy();
                        
                                header('Location: index.php?action=connexion');
                                exit();
                                $_SESSION['flash'] = "Votre compte à été créé !";

                                
                            
                                    
                            } else {
                                $error = "<i class='fas fa-exclamation-triangle'></i> YOUR PASSWORDS DO NOT MATCH <i class='fas fa-exclamation-triangle'></i>";
                            }
                                
                        }
                    } 
                }
            }
        }
        require('view/signinView.php');
    }

    


    function about() {
        require('view/aboutView.php');
    }

    function error()
    {
        require('view/errorView.php');
    }

    function deconnexion()
    {
        session_start();
        $_SESSION = array();
        session_destroy();

        header('Location: index.php?action=connexion');

        require('view/profilView.php');

        require('view/connexionView.php');
    }

}
