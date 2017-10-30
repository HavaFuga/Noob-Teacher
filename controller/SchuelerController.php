<?php

require_once '../repository/SchuelerRepository.php';

class SchuelerController
{
    #Schüler Auflistung
    public function index()
    {
        $schuelerRepository = new SchuelerRepository();
        $view = new View('schueler_index');
        $view->title = 'Schüler';
        $view->heading = 'Schüler';
        $view->schueler = $schuelerRepository->readAll();
        $view->display();
    }

    #Schüler erstellen-Seite
    public function create()
    {
        $view = new View('schueler_create');
        $view->title = 'Schüler erstellen';
        $view->heading = 'Schüler erstellen';
        $view->display();
    }

    #E-Mail validieren
    public function test_input($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            return $emailErr;
        }
        return $email;
    }

    #Vorname validieren
    public function test_firstname($firstname)
    {
        if ($firstname == "" || (strlen($firstname) < 2 || (strlen($firstname)) > 50)){
            return false;
        }
        return $firstname;
    }
    
    #Nachname validieren
    public function test_lastname($lastname)
    {
        if ($lastname == "" || (strlen($lastname) < 2 || (strlen($lastname)) > 50)){
            return false;
        }
        return $lastname;
    }
    
    #Schüler erstellen
    public function doCreate()
    {
        if ($_POST['send']) {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST["email"]);
            $email = $this->test_input($email);
            $firstname = $this->test_firstname($firstname);
            $lastname = $this->test_lastname($lastname);

            if($email  == "Invalid email format" || !$firstname || !$lastname){
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

    #Schüler löschen
    public function delete()
    {
        $schuelerRepository = new SchuelerRepository();
        $schuelerRepository->deleteById($_GET['id']);
        header('Location: /schueler');
    }

    #Schüler Bearbeiten-Seite
    public function edit()
    {
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

    #Schüler bearbeiten
    public function doedit()
    {
        if ($_POST['send']) {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST["email"]);
            $email = $this->test_input($email);
            $firstname = $this->test_firstname($firstname);
            $lastname = $this->test_lastname($lastname);
            $id = htmlspecialchars($_POST["id"]);
            
            if($email  == "Invalid email format" || !$firstname || !$lastname){
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
    }
    
    #Erstellt die Hilfeseite
    public function help()
    {
        $view = new View('schueler_help');
        $view->title = 'Hilfe';
        $view->heading = 'Hilfe';
        $view->display();
    }
}
