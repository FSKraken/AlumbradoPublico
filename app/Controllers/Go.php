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



    public function admin($zona = null, $data = null){
        $this->data["session"] = 0;
        $this->data["zona"] = 0;
        $this->data["data"] = 0;

        return plantilla("go/admin".(session("logged") ? "panel" : "form"), $this->data);
    }

    public function admin_login(){
		$usuario  = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

        if($u = model('UsuarioModel')->find($usuario)){
            if($hash = $u->check_hash($password)){
                $respuesta = ["hash" => $hash];

                session()->set('logged', $usuario);
            }
            else
                $respuesta = ["error" => "password"];
        }
        else
            $respuesta = ["error" => "usuario"];

        echo json_encode($respuesta);
    }

    public function admin_logout(){
        session()->destroy();
        return redirect()->to(base_url()."/go/admin");
    }

    // cargar CSV
    public function cargaCSV(){
        $file = $this->request->getFile('csv_file');
        
        if (! $file->isValid()) {
            throw new \RuntimeException($file->getErrorString().'('.$file->getError().')');
        }

        $archivo = time().".csv";
        $file->move("csv", $archivo);
        $added = 0;

        if ( ($handle = fopen("csv/".$archivo, "r")) !== FALSE) {
            
            $db = db_connect();
            $sql = "select count(id) as total from luminarias";

            $inicial = $db->query($sql)->getRow(); 

            while (($data = fgetcsv($handle, 0, ",")) !== FALSE)
            if($data[0] != 'X'){

                $sql = "INSERT IGNORE INTO luminarias values (
                        NULL,
                        $data[0], 
                        $data[1], 
                        JSON_OBJECT(
                            'calle', '".utf8_encode($data[2])."', 
                            'colonia' , '".utf8_encode($data[3])."',
                            'ubicacion' , '".utf8_encode($data[6])."',
                            'tipo', {$data[5]}, 
                            'estado', '".utf8_encode($data[7])."',
                            'origen', '{$archivo}'))";

                $db->query($sql);
            }
            fclose($handle);

            $sql = "select count(id) as total from luminarias";
            $final = $db->query($sql)->getRow(); 

           // return redirect()->to(base_url("go/admin/csv/".($final->total - $inicial->total)));
        }
    }
}
