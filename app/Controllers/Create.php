<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Create extends BaseController
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
            "first_name" => $_POST['first_name'],
            "last_name" => $_POST['last_name'],
            "email" => $_POST['email'],
            "gender" => $_POST['gender'],
            "ip_address" => $_POST['ip_address'],
            "phone" => $_POST['phone']
        ]; 
        $Crud = new CrudModel();
        $envio = $Crud->create($datos); 
if ($envio > 0) {
            return redirect()->to(base_url().'/create')->with('mensaje','1');
        } 
        else {
            return redirect()->to(base_url().'/create')->with('mensaje','2');
        }
       

    }
        
        }
        

}



