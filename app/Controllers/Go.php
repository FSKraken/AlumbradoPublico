<?php

namespace App\Controllers;

class Go extends BaseController
{
    public function mapa(){
        $this->data["coordenadas"] = model('LuminariaModel')->findAll();
        
        return plantilla("inicio/mapa", $this->data);
    }

    public function consulta(){
        return plantilla("inicio/consulta", $this->data);
    }

    public function info(){
        return plantilla("inicio/info", $this->data);
    }   
    
    public function admin(){
        return plantilla("inicio/admin", $this->data);
    }       
}
