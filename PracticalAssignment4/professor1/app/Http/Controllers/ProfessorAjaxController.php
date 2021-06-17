<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorAjaxController extends Controller
{
    //CREAMOS LAS FUNCIONES PARA PODER MODIFICAR Y VER LOS DATOS
    //EN POSTMAN PERO PRIMERO NOS DIRIGIMOS A MIDDLEWARE PARA CREAR UNA
    //EXCEPCION PARA PODER MANDAR LOS DATOS A POSTMAN
    public function getProfessor() {
        return Professor::all();
    }

    public function postProfessor(Request $request) {
        $professor = $request->all();
        return ['result' => Professor::create($professor)];
    }

    public function putProfessor(Request $request) {
        $professorData = $request->all();
        $professor = Professor::find($professorData['id']);
        $professor->firstName = $professorData['firstName'];
        $professor->lastName = $professorData['lastName'];
        $professor->city = $professorData['city'];
        $professor->address = $professorData['address'];
        $professor->salary = $professorData['salary'];
        return ['result' => $professor->save()];
    }

    public function deleteProfessor($id) {
        Professor::where('id', $id)->delete();
        return ['result' => true];
    }
}
