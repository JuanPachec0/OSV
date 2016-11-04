<?php

class Usuarios_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
        
    }

    function get_list_empresa()
    {
        $cod_empresa=$this->ion_auth->get_empresa();
        $data = array(''=>'seleccione');
        $this->db->select("id, nb_empresa");
        $this->db->where('in_activo', 1);
        $query = $this->db->get('j001t_empresa');


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row){
                $data[$row->id] = $row->nb_empresa;
            }
        }
        $query->free_result();
        return $data;
     
    }


    function get_usuarios()
    {
        $cod_empresa=$this->ion_auth->get_empresa();
        $sql="SELECT a.id, a.username, a.email, a.first_name, a.last_name, a.phone, a.active, a.co_empresa, b.nb_empresa FROM login_unico.users as a
        LEFT JOIN j001t_empresa as b on b.id = a.co_empresa where a.co_empresa <> '$cod_empresa'";
        $query=$this->db->query($sql);
        return $query;
    }





function get_usuarios_model($id)
    {


        $cod_empresa=$this->ion_auth->get_empresa();

        $sql="SELECT a.id, a.username, a.email, a.first_name, a.last_name, a.co_empresa, a.phone, a.active FROM login_unico.users as a
        JOIN medinet.j001t_empresa as b on b.id = a.co_empresa 
        where a.id = '$id'";
        $query=$this->db->query($sql);
        $query->row(); 
        return $query->row();
    }
function get_estatus()
    {
    
        $id=$this->session->userdata('app_id');
        $sql="SELECT aa.co_estatus,e.nb_estatus from sinfonica.users aa
            inner join sinfonica.estatus e on aa.co_estatus=e.id
            where aa.id = '$id'";
        $consulta=$this->db->query($sql);
        var_dump($consulta);die();
        return $query;
    }




function add_usuarios_model()
    {
           
        $this->db->trans_start();
        
        $data['username']=$this->input->post('username');
        $data['ip_address']='127.0.0.1';
        $data['co_empresa']=$this->input->post('co_empresa');
        $data['email']=$this->input->post('email');
        $data['first_name']=$this->input->post('first_name');
        $data['last_name']=$this->input->post('last_name');
        $data['phone']=$this->input->post('phone');
        $data['active']=$this->input->post('activado');
        $data['password']='$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36';
        $data['created_on']='1268889823';    
        $this->db->insert("login_unico.users",$data);
        $this->db->trans_complete();


        return "Usuario Registrado";

    }    


    function update_usuarios_model()
    {
           
        $this->db->trans_start();
        $data['username']=$this->input->post('username');
        $data['ip_address']='127.0.0.1';
        $data['co_empresa']=$this->input->post('co_empresa');
        $data['email']=$this->input->post('email');
        $data['first_name']=$this->input->post('first_name');
        $data['last_name']=$this->input->post('last_name');
        $data['phone']=$this->input->post('phone');
        $data['active']=$this->input->post('activado');
        $data['created_on']='1268889823';    
        $this->db->where('id', $this->input->post('co_user'));
        $this->db->update("login_unico.users",$data);
        $this->db->trans_complete();


        return "Usuario Actualizado";

    }    
    
        

}
?>