<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads extends CI_Controller {

	/***********************************************************************************
	 Programas
	 ***********************************************************************************/
	public function Programas()
	{
		$this->load->view('downloads/programas');	
    }
}
