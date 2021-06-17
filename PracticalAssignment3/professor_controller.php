<?php
    header("Content-Type: application/json");

    /**
     * professor_controller.php
     * Implementa los servicios para realizar altas, bajas, modificaciones y lectura
     * de datos de profesores
     * del cual lo estoy creando de las dos formas con Switch y con la nueva
     * forma que nos enseño en la ultima clase con professor_route.php
     */

    require 'professorDAO.php';
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $professorDAO = new ProfessorDAO();

    switch ($requestMethod) {
        case 'GET':
            if (empty($_GET['id'])) {
                echo json_encode($professorDAO->findProfessor());
            } else {
                echo json_encode($professorDAO->findProfessorById($_GET['id']));
            }
            break;
        case 'POST':
            $jsonProfessor = json_decode(file_get_contents("php://input"), true);
            $professor = new Professor(
                $jsonProfessor['firstName'],
                $jsonProfessor['lastName'],
                $jsonProfessor['city'],
                $jsonProfessor['years_experience'],
                $jsonProfessor['salary']
            );
            echo json_encode(['result' => $professorDAO->save($professor)]);
            break;
        case 'PUT':
            $jsonProfessor = json_decode(file_get_contents("php://input"), true);
            $professor = new Professor(
                $jsonProfessor['firstName'],
                $jsonProfessor['lastName'],
                $jsonProfessor['city'],
                $jsonProfessor['years_experience'],
                $jsonProfessor['salary'],
                $jsonProfessor['id']
            );
            echo json_encode(['result' => $professorDAO->update($professor)]);
            break;
        case 'DELETE':
            $query = $_SERVER['QUERY_STRING'];
            list($key, $value) = explode('=', $query);
            echo json_encode(['result' => $professorDAO->delete($value)]);
            break;
}