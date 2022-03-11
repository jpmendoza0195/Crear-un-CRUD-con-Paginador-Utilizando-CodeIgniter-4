<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Update extends BaseController
{
    public function index($id)
    {
        $datos = [
            "id" => $_POST['id'],
            "first_name" => $_POST['first_name'],
            "last_name" => $_POST['last_name'],
            "email" => $_POST['email'],
            "gender" => $_POST['gender'],
            "ip_address" => $_POST['ip_address'],
            "phone" => $_POST['phone']
        ]; 

        $Crud = new CrudModel();
        $respuesta = $Crud->update($datos,$id)
    }
        

}
