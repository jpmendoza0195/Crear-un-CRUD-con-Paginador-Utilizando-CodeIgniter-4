<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listado_customers();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('Views/crud/index', $data);
    }
}
