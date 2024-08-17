<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    public function alldata(){
        return $this->db->table('print')->get()->getResultArray();
    }
}