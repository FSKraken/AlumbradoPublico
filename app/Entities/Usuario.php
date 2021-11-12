<?php namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{
    public function check_hash($hash){
        if(hash("sha256", $hash) == $this->attributes['password'])
            return $this->attributes['password'];

        return null;
    }
}