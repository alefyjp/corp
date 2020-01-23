<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalacoes extends CI_Controller {
	/***********************************************************************************
	 Index
	 ***********************************************************************************/
	public function index()
	{
		$this->load->view('instalacoes/index');
	}

	/***********************************************************************************
	 Residencial
	 ***********************************************************************************/
	public function Residencial()
	{
		$this->load->view('instalacoes/residencial');
	}

	/***********************************************************************************
	 Condominio
	 ***********************************************************************************/
	public function Condominio()
	{
		$this->load->view('instalacoes/condominio');
	}
	
}
