<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
		$this->load->model('usuarios_model');
		
		if (!$this->ion_auth->logged_in())
		{
			
			redirect('auth/login');

		}
	}
	
	
	public function index()
	{	
            $data['user']= $this->ion_auth->get_data_user();
                if ($data['user']->active!=1){
                    $this->vista = '/inicio/update_default'; 
                    $this->mostrar();
                //$this->update_user();
            }
            
//                $this->data['co_estatus']=$this->usuarios_model->get_estatus();
//                var_dump($data);die();
		//$this->data['mi_demanda'] = $this->productos_ventas_model->get_productos_mi_demanda_model();
//		$this->data['general_busqueda'] = $this->productos_ventas_model->get_productos_todos_model();
            
		$this->vista = '/inicio/default_view'; 
		$this->mostrar();
	}

}