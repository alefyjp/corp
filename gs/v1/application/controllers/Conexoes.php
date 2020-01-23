<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conexoes extends CI_Controller {

	/***********************************************************************************
	 Index
	 ***********************************************************************************/
	public function index()
	{
        $c = $_GET["c"];

		$this->load->view('conexoes/'.$c);	
    }
}
