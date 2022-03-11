<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model {

    public function listado_customers(){
        $lista = $this->db->query("SELECT * FROM customers");
        return $lista->getResult();
    }

    public function create($datos) {
        $lista = $this->db->table('customers');
        $lista->insert($datos);
        return $this->db->insertID();
    }

    public function edit($data) {
        $lista = $this->db->table('customers');
        $lista->where($data);
        return $lista->get()->getResultArray();
    }

    public function actualizar($data, $id) {
        $lista = $this->db->table('customers');
        $lista->where($data);
        $lista->where('id', $id);
        return $lista->update();

    }
   
}
