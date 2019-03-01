<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


class Paises extends CI_Controller {

    public function __construct(){
        // Llammado del constructor del padre
        parent::__construct();
        
        $this->load->database();
    }

    public function index(){

        $query = $this->db->get('pais');

        $respuesta = array(
            'err' => FALSE,
            'mensaje' => 'Registros cargados correctamente.',
            'total_registros' => $query->num_rows(),
            'clientes' => $query->result()
        );

        echo json_encode($respuesta);

    }


}