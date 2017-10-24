<?php

require_once '../repository/SchuelerRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class SchuelerController
{

    private $has_error = false;
    private $error_message = "";

    public function index()
    {
        $schuelerRepository = new SchuelerRepository();

        $view = new View('schueler_index');
        $view->title = 'Schüler';
        $view->heading = 'Schüler';
        $view->schueler = $schuelerRepository->readAll();
        $view->display();
    }

    public function create()
    {
        $view = new View('schueler_create');
        $view->title = 'Schüler erstellen';
        $view->heading = 'Schüler erstellen';
        $view->display();
    }
    public function test_input($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            return $emailErr;
            }
        return $email;
    }

    public function test_firstname($firstname)
    {
        if ($firstname == ""){
            $firstname = 0;
        }
        if ((strlen($firstname) < 5 )){
            $firstname = 0;
        }
        if ((strlen($firstname) > 50)){
            $firstname = 0;
        }
        return $firstname;
    }

    public function test_lastname($lastname)
    {
        if ($lastname == ""){
            return false;
        }
        if ((strlen($lastname) < 2)){
            return false;
        }
        if ((strlen($lastname) > 50)){
            return false;
        }
        return $lastname;
    }

    public function doCreate()
    {
        if ($_POST['send']) {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST["email"]);
            $email = $this->test_input($email);
            $firstname = $this->test_firstname($firstname);
            $lastname = $this->test_lastname($lastname);

            if($email  == "Invalid email format" || $firstname == 0 || $lastname ==0){
                $view = new View('schueler_create_fehlermeldung');
                $view->title = 'Fehler';
                $view->heading = 'Fehler';
                $view->display();
            }else {
                $schuelerRepository = new SchuelerRepository();
                $schuelerRepository->create($firstname, $lastname, $email);
                header('Location: /schueler');
            }
        }
    }
    
    
    
    public function delete()
    {
        $schuelerRepository = new SchuelerRepository();
        $schuelerRepository->deleteById($_GET['id']);
        header('Location: /schueler/create');
    }
    public function edit()
    {
        // falls $_GEt['id'] gesetzt -> daten für dieses element mitschicken
        if($_GET['id'] > 0 ){
            
            $id = $_GET['id'];
            $schuelerRepository = new SchuelerRepository();
            $view = new View('schueler_edit');
            $view->title = 'Schüler bearbeiten';
            $view->heading = 'Schüler bearbeiten';
            
            
            $view->aktuellerSchueler = $schuelerRepository->readById($id);
            
            $view->schueler = $schuelerRepository->readAll();
            $view->display();
            
            
            
        }
        else 
        {
        $schuelerRepository = new SchuelerRepository();
        $view = new View('schueler_edit');
        $view->title = 'Schüler bearbeiten';
        $view->heading = 'Schüler bearbeiten';
        
        $view->schueler = $schuelerRepository->readAll();
        $view->display();
            
        }
    }
    public function doedit()
    {
        
        if ($_POST['send']) {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST["email"]);
            $email = $this->test_input($email);
            $id = htmlspecialchars($_POST["id"]);
            
            if($email  == "Invalid email format"){
                $view = new View('schueler_edit_fehlermeldung');
                $view->title = 'Fehler';
                $view->heading = 'Fehler';
                $view->display();
                
            }else {
                $schuelerRepository = new SchuelerRepository();
                $schuelerRepository->edit($firstname, $lastname, $email, $id);
                header('Location: /schueler');
            }

            
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        
    }
    public function help()
    {
        $view = new View('schueler_help');
        $view->title = 'Hilfe';
        $view->heading = 'Hilfe';
        $view->display();
    }
}
