<?php

class Constancias_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->db= $this->load->database('nm777', TRUE);
        
    }
    function get_constancia($id){
        $this->db->select("cedula,nombre,apellido,fecha_ing, salario,car_descri");
        $this->db->from('nmtrabajador');
        $this->db->join('nmcargos','nmtrabajador.cod_cargo=nmcargos.car_codigo');
        $this->db->where("(cedula= $id and condicion='A')");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row){
                $data = array('cedula'    => $row->cedula,
                              'nombre'    => $row->nombre,
                              'apellido'  => $row->apellido,
                              'fecha_ing' => $row->fecha_ing,
                              'salario'   => $row->salario,
                              'cargo'     => $row->car_descri
                    );
            }
        }
        $query->free_result();
        var_dump($data);die;
        return $data;
      
    }
}

