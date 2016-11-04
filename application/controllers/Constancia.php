<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Constancia extends MY_Controller{
    function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth'));
		$this->load->helper(array('url'));

		$this->load->model('constancias_model');
		
		if (!$this->ion_auth->logged_in())
		{
			
			redirect('auth/login');

		}
	}
    public function index(){
        if (!$this->ion_auth->logged_in()){
            redirect('auth/login');
        }
         $data['user']= $this->ion_auth->get_data_user();
         $this->generar_constancia($data['user']->cedula);
         
         
    }
    
    public function generar_constancia($cedula){
        $data['pdfData'] = $this->constancias_model->get_constancia($cedula);
        $html=$this->load->view('constancia/constancia.html', $data, true);
        $pdfFilePath = $data['pdfData']['nombre'].' '.$data['pdfData']['apellido'].".pdf";
        //this the the PDF filename that user will get to download
        //load mPDF library
        $this->load->library('m_pdf');
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");    
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

