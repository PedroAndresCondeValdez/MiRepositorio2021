<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    //CREAMOS UNA EXEPCION PORQUE EN POSTMAN NO HAY UNA MANERA DE ENVIAR TODOS LOS DATOS COMPLETOS
    //ENTONCES VAMOS A DESHABILITAR LA VERIFICACION DE CSRF
    protected $except = [
        '/ajaxprofessors',
        '/ajaxprofessors/*'
    ];
}
