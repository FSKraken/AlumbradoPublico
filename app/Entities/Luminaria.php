<?php namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Luminaria extends Entity
{
    protected $casts = [
        'data' => 'json'
    ];
}