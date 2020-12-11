<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpay extends CI_Controller {

	public function index()
	{
		$style['style'] = $this->load->view('style' ,"" , true);
		$style['dashboardlink'] = $this->load->view('dashboardlink' ,"" , true);
		
		$this->load->view('dashboard',$style);
	}
	
	public function profile()
	{
		$style['style'] = $this->load->view('style' ,"" , true);
		$style['dashboardlink'] = $this->load->view('dashboardlink' ,"" , true);
		$this->load->view('profile',$style);
	}

	function documentation()
	{
		$style['style'] = $this->load->view('style' ,"" , true);
		$style['dashboardlink'] = $this->load->view('dashboardlink' ,"" , true);
		$this->load->view('documentation',$style);
	}
}
