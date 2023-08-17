<?php

namespace App\Models;

use CodeIgniter\Model;

class Academic extends Model
{
    use \Tatter\Relations\Traits\ModelTrait;
    protected $DBGroup          = 'default';
    protected $table            = 'academics';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'academicable_type',
        'academicable_id',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function academicable()
    {
        // $db = \Config\Database::connect();

        switch ($this->academicable_type) {
            case 'faculty':
                $facultyModel = new Faculty();
                return $facultyModel->find($this->academicable_id);

            case 'major':
                $majorModel = new Major();
                return $majorModel->find($this->academicable_id);

            default:
                return null;
        }
    }

    public function user()
    {
        return $this->hasOne(UserModel::class, 'id', 'user_id');
    }
}
