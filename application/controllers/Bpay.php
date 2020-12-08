<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpay extends CI_Controller {

	public function index()
	{
		$style['style'] = $this->load->view('style' ,"" , true);
		
		$this->load->view('dashboard',$style);
	}
}
