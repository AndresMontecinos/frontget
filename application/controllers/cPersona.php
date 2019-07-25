<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cPersona extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->model('mPersona');
    }

	public function index()
	{
		$this->load->view('persona/vregPersona');
  }
    
    public function guardar()
    {
		echo "registro guardado exitosamente";
		$param['idpersona'] = $this->input->post('txtidpersona');
		$param['nombres'] =$this->input->post('txtnombres');

		$this->mPersona->guardar($param);

    }
}
