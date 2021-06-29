<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class MainanModel extends Model
{
    protected $table      = 'mainan';
    protected $primaryKey = 'id_mainan';
    protected $allowedFields = ['nama_mainan', 'merk_mainan', 'kategori_mainan', 'deskripsi_mainan', 'harga', 'stok', 'foto'];

    public function getMainan($id_mainan)
    {
        $builder = $this->db->table('mainan');
        $builder->where('id_mainan', $id_mainan);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
