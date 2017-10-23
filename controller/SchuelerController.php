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

    public function doCreate()
    {
        if ($_POST['send']) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            }

            $schuelerRepository = new SchuelerRepository();
            $schuelerRepository->create($firstName, $lastName, $email);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /schueler');
    }

    public function delete()
    {
        $schuelerRepository = new SchuelerRepository();
        $schuelerRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /schueler');
    }
}
