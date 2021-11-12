<?php namespace App\Controllers;

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
        $this->data["session"] = 0;
        return plantilla("go/admin", $this->data);
    }

    public function admin_login(){

		$usuario  = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');


        if($u = model('UsuarioModel')->find($usuario)){
            if($hash = $u->check_hash($password)){
                $respuesta = ["hash" => $hash];
                
                session()->set('logged', $usuario);
            }
            else{
                $respuesta = ["error" => "password"];
            }
        }
        else{
            $respuesta = ["error" => "usuario"];
        }

        echo json_encode($respuesta);
    }
}
