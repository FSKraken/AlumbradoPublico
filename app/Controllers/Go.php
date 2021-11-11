<?php

namespace App\Controllers;

class Go extends BaseController
{
    public function mapa()
    {
        return plantilla("inicio/mapa", $this->data);
    }
}
