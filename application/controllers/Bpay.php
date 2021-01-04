<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpay extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function dashboard()
	{
        $style['style'] = $this->load->view('style', "", true);
        $style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
        
        $this->load->view('dashboard', $style);
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

	public function loginv()
	{
		$this->load->view('auth');
	}
	
	function connexion()
	{
		
		$url="http://cloudbpay.bvortex.com/index.php/api/login";
		$datas=array('phone_number'=>$_POST['phone_number'],'password'=>$_POST['password']);
		$ch= curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
		$result= curl_exec($ch);
		$donnee=json_decode($result);
		$varferrors = isset($donnee->form_errors) ? $donnee->form_errors:null;
		if ($varferrors)
		{
		$this->session->set_flashdata('checkFailed', 'Mot de passe ou username incorrect');
		redirect('bpay\loginv');
		}
		else{			
			$data_session = array(
				'pseudo'=>$donnee->user->pseudo,
				'tel_airtel' => $donnee->user->tel_airtel,
				'fullname'=>$donnee->user->fullname,
				'email'=>$donnee->user->email,
				'user_id'=>$donnee->user->id,
				'connected' => true,			 
			);
			
			 $this->session->set_userdata($data_session);

			redirect('bpay\dashboard');
			 
			print_r($donnee->user);
		}
		curl_close($ch);
	}

	function logout()
	{
		session_destroy();
		redirect('bpay\loginv');

	}
}
