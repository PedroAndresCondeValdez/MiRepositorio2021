<?php
    header("Content-Type: application/json");
    require 'professor_controller_class.php';
    /**
     * professor_route.php
     * Implementa los servicios para realizar altas, bajas, modificaciones y lectura
     * de datos de profesores que de esta forma es mucho mas factible usarla que la otra.
     */
    $professorController = new ProfessorController();

    switch ($requestMethod) {
        case 'GET':
            if (empty($_GET['id'])) {
                echo json_encode($professorController->getProfesors());
            } else {
                echo json_encode($professorController->getProfessorsById($_GET['id']));
            }
            break;
        case 'POST':
            $jsonProfessor = json_decode(file_get_contents("php://input"), true);
            echo json_encode(['result' => $professorController->postProfessor($jsonProfessor)]);
            break;
        case 'PUT':
            $jsonProfessor = json_decode(file_get_contents("php://input"), true);
            echo json_encode(['result' => $professorController->putProfessor($jsonProfessor)]);
            break;
        case 'DELETE':
            $query = $_SERVER['QUERY_STRING'];
            list($key, $value) = explode('=', $query);
            echo json_encode(['result' => $professorController->deleteProfessor($value)]);
            break;
    }