<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Edit extends BaseController
{
    public function index($id)
    {

        $data = ["id" => $id];
        $Crud = new CrudModel();
        $respuesta = $Crud->edit($data);

        $datos = ["datos" => $respuesta];

        return view('edit', $datos);
    
    }
        

}
