<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guia extends CI_Controller {
	/***********************************************************************************
	 Index
	 ***********************************************************************************/
	public function index()
	{
		$this->load->view('guia/index');
	}

	/***********************************************************************************
	 ONUs
	 ***********************************************************************************/
	public function Onus()
	{
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('guia/index');
		}
		else if($modelo=="")
		{
			$this->load->view('guia/index');
		}
		else
		{
			$this->load->view('guia/'.$modelo);
		}		 
	}

	/***********************************************************************************
	 Roteadores
	 ***********************************************************************************/
	public function Roteadores()
	{
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('guia/index');
		}
		else if($modelo=="")
		{
			$this->load->view('guia/index');
		}
		else
		{
			$this->load->view('guia/'.$modelo);
		}		 
	}
}
