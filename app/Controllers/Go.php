<?php

namespace App\Controllers;

class Go extends BaseController
{
    public function mapa(){
        $this->data["coordenadas"] = model('LuminariaModel')->findAll();
        return plantilla("go/mapa", $this->data);
    }

    public function consulta(){
        return plantilla("go/consulta", $this->data);
    }

    public function info(){
        return plantilla("go/info", $this->data);
    }   
    
    public function admin(){
        return plantilla("go/admin", $this->data);
    }       
}
