<?php namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table          = 'usuarios';
    protected $primaryKey     = 'username';
    protected $useAutoIncrement = false;
    protected $returnType     = 'App\Entities\Usuario';
    protected $useSoftDeletes = false;
    protected $allowedFields  = ['username', 'password', 'estatus', 'nivel', 'correo', 'telefono'];
    protected $useTimestamps  = false;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $skipValidation = false;
}