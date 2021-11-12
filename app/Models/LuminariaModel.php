<?php namespace App\Models;
use CodeIgniter\Model;

class LuminariaModel extends Model
{
    protected $table          = 'luminarias';
    protected $primaryKey     = 'id';
    protected $useAutoIncrement = false;
    protected $returnType     = 'App\Entities\Luminaria';
    protected $useSoftDeletes = false;
    protected $allowedFields  = ['id', 'lng', 'lat', 'data'];
    protected $useTimestamps  = false;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $skipValidation = false;
}