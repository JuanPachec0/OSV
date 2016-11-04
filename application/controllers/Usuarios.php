<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios extends MY_Controller
{
	function __construct()
	{

		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
			return;
		}
		
		$this->load->model('usuarios_model');

	
	}
	
	
	public function index()
	{
		
		$this->data['usuarios']=$this->usuarios_model->get_usuarios();
		$this->vista = 'administracion/usuarios/usuario_view';
		$this->mostrar();
	}


		public function agregar_usuarios()
	{
		
		//$this->data['id_usuarios']=$this->usuarios_model->get_id_usuarios();

		$this->data['lista_empresa']=$this->usuarios_model->get_list_empresa();
       	$this->data['co_empresa']='';

		$this->data['username'] = array(
                    'name'  => 'username',
                    'id'    => 'username',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('username'),
            );

                    $this->data['email'] = array(
                    'name'  => 'email',
                    'id'    => 'email',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('email'),
            );


            $this->data['first_name'] = array(
                    'name'  => 'first_name',
                    'id'    => 'first_name',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('first_name'),
            );

             $this->data['last_name'] = array(
                    'name'  => 'last_name',
                    'id'    => 'last_name',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('last_name'),
            );

              $this->data['phone'] = array(
                    'name'  => 'phone',
                    'id'    => 'phone',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('phone'),
            );

                 $this->data['activado'] = array(
                'name'  => 'activado',
                'id'    => 'activado',
                'type'  => 'checkbox',
                'value' => '1',
                'checked'     => 0,
        );


		$this->vista = 'administracion/usuarios/add_usuario_view';
		$this->mostrar();
	}


            public function editar_usuario($id)
    {


        
        $this->data['get_usuario']=$this->usuarios_model->get_usuarios_model($id);

        $empresa = $this->data['get_usuario']->co_empresa;
        $username = $this->data['get_usuario']->username;
        $email = $this->data['get_usuario']->email;
        $first_name = $this->data['get_usuario']->first_name;
        $last_name = $this->data['get_usuario']->last_name;
        $phone = $this->data['get_usuario']->phone;
        $active = $this->data['get_usuario']->active;
        $this->data['id_usuario']=$id;

        $this->data['lista_empresa']=$this->usuarios_model->get_list_empresa();
        $this->data['co_empresa']=$empresa;


        $this->data['username'] = array(
                    'name'  => 'username',
                    'id'    => 'username',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('username',$username),
            );


                    $this->data['email'] = array(
                    'name'  => 'email',
                    'id'    => 'email',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('email',$email),
            );


            $this->data['first_name'] = array(
                    'name'  => 'first_name',
                    'id'    => 'first_name',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('first_name',$first_name),
            );

             $this->data['last_name'] = array(
                    'name'  => 'last_name',
                    'id'    => 'last_name',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('last_name',$last_name),
            );

              $this->data['phone'] = array(
                    'name'  => 'phone',
                    'id'    => 'phone',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => set_value('phone',$phone),
            );

                 $this->data['activado'] = array(
                'name'  => 'activado',
                'id'    => 'activado',
                'type'  => 'checkbox',
                'value' => '1',
                'checked'     => $active,
        );


        $this->vista = 'administracion/usuarios/add_usuario_view';
        $this->mostrar();
    }


function add_usuarios()
{

    
    if ($this->input->post('co_user') == '') {



    $receive_email = trim($this->input->post('email'));

    $query = $this->db->select('email')->from('login_unico.users')
    ->where('email', $receive_email)->limit(1)->get();

    if ($query->row()) {
    echo "El email ya existe en el sistema";
    return false;
                }else{

    $response = $this->usuarios_model->add_usuarios_model();
    echo $response;
            }

    }else{
        $id_user_modificar = $this->input->post('co_user');

    $receive_email = trim($this->input->post('email'));

    $sql="SELECT a.id, a.username, a.email, a.first_name, a.last_name, a.co_empresa, a.phone, a.active 
    FROM login_unico.users as a
    where a.id <> '$id_user_modificar' and a.email = '$receive_email'
    limit 1";
        $query=$this->db->query($sql);

    if ($query->row()) {
    echo "El email ya existe en el sistema";
    return false;
        }else{

    $response = $this->usuarios_model->update_usuarios_model();
     echo $response;
        }


      }



}


}


?>
