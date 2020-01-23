<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamentos extends CI_Controller {
	/***********************************************************************************
	 Index
	 ***********************************************************************************/
	public function index()
	{
		echo"Sem view";
	}

	/***********************************************************************************
	 ONUs
	 ***********************************************************************************/
	public function onus()
	{
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('onus/index');
		}
		else if($modelo=="")
		{
			$this->load->view('onus/index');
		}
		else
		{
			$this->load->view('onus/'.$modelo);
		}	
	}

	/***********************************************************************************
	 Roteadores
	 ***********************************************************************************/
	public function roteadores()
	{
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('roteadores/index');
		}
		else if($modelo=="")
		{
			$this->load->view('roteadores/index');
		}
		else
		{
			$this->load->view('roteadores/'.$modelo);
		}		
	}

	/***********************************************************************************
	 Fontes
	 ***********************************************************************************/

	public function fontes()
	{	
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('fontes/index');
		}
		else if($modelo=="")
		{
			$this->load->view('fontes/index');
		}
		else
		{
			$this->load->view('fontes/'.$modelo);
		}		
	}

	
	
	/***********************************************************************************
	 Modens
	 ***********************************************************************************/
	public function modens()
	{
		$modelo = $_GET["modelo"];
		
		if($modelo==null)
		{
			$this->load->view('modens/index');
		}
		else if($modelo=="")
		{
			$this->load->view('modens/index');
		}
		else
		{
			$this->load->view('modens/'.$modelo);
		}	
	}
}
