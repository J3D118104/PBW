<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;


use CodeIgniter\Model;

class Agama_Model extends Model {
    protected $table      = 'agama';
    protected $primaryKey = 'kode_agama';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_agama', 'agama'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_sebaran_mahasiswa(){
        $db = \Config\Database::connect();
       
        $this->builder = $db->table($this->table);

        $this->builder->select('agama, (COUNT(mahasiswa.kode_agama)) AS jumlah_mahasiswa');
        $this->builder->join('mahasiswa', 'agama.kode_agama = mahasiswa.kode_agama','left');
        $this->builder->groupBy('agama');

        return $this->builder->get();
           
    }
}