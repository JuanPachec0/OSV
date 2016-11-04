<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Controller extends CI_Controller
    { 
        //Establece las variables de la clase.
        public $template  = array();
        public $data      = array();
 
        /*Cargar las librerias necesarias */
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form','language','url'));
            
        }
 
        /*Front Page Layout*/
        public function mostrar() {
            // making template and send data to view.
            $this->template['header']   = $this->load->view('layout/header', $this->data, true);
            $this->template['leftpanel']   = $this->load->view('layout/leftpanel', $this->data, true);
            $this->template['middle'] = $this->load->view($this->vista, $this->data, true);
            $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
            $this->load->view('layout/front', $this->template);
        }
    }