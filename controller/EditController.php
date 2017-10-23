<?php

require_once '../repository/SchuelerRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class SchuelerController
{
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
    
    public function doCreate()
    {
        if ($_POST['send']) {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST["email"]);
            $email = $this->test_input($email);
            
            if($email  == "Invalid email format"){
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

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        
    }
    
    
    
    public function delete()
    {
        $schuelerRepository = new SchuelerRepository();
        $schuelerRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /schueler');
    }
}
