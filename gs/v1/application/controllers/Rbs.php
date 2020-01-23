<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rbs extends CI_Controller {
	/***********************************************************************************
	 Index
	 ***********************************************************************************/
	public function index()
	{
		//$this->load->view('welcome_message');
		echo"RBS";
	}

	/***********************************************************************************
	 RBS por cidades
	 ***********************************************************************************/
	public function Cidade()
	{
		$c = $_GET["c"];

		$this->load->view('Rbs/'.$c);
	}
	
}
