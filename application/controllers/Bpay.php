<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpay extends CI_Controller
{
	function __construct ()
{	
  parent::__construct();
  $this->load->helper('url');
  
}

	public function index()
	{
		$this->load->view('home');
	}

	public function dashboard()
	{
		$this->isconnected();
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);

		$this->load->view('dashboard', $style);
	}

	public function profile()
	{
		$this->load->library('phpqrcode/qrlib');
		$this->isconnected();
		$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		$ch  = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$business = curl_exec($ch);
		$returnedbusiness = json_decode($business);

		foreach ($returnedbusiness as $key => $value) {
			# code...
						//file path for store images
						$SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/bpay/qrcode/';
						$text = $value->business_key;		 	
						$folder = $SERVERFILEPATH;
						$file_name1 = $text.".png";
						$file_name = $folder.$file_name1;
						QRcode::png($text,$file_name,'Q',10,3);
		}
		
		$style['business'] =  $returnedbusiness;
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
		$this->load->view('profile', $style);
		 
	}

	function documentation()
	{
		$this->isconnected();
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
		$this->load->view('documentation', $style);
	}

	public function loginv()
	{
		$this->load->view('auth');
	}

	function connexion()
	{

		$url = "http://cloudbpay.bvortex.com/index.php/api/login";
		$datas = array('phone_number' => $_POST['phone_number'], 'password' => $_POST['password']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		$result = curl_exec($ch);
		$donnee = json_decode($result);
		$varferrors = isset($donnee->form_errors) ? $donnee->form_errors : null;
		if ($varferrors) {
			$this->session->set_flashdata('checkFailed', 'Mot de passe ou username incorrect');
			redirect('bpay\loginv');
		} else {
			$data_session = array(
				'pseudo' => $donnee->user->pseudo,
				'tel_airtel' => $donnee->user->tel_airtel,
				'fullname' => $donnee->user->fullname,
				'email' => $donnee->user->email,
				'user_id' => $donnee->user->id,
				'connected' => true,
			);
			$this->session->set_userdata($data_session);

			#transactions envoyees
			$url = "http://cloudbpay.bvortex.com/index.php/api/get_sended_tx/" . $this->session->user_id;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);

			$resultsended = curl_exec($ch);
			$transactionsended = json_decode($resultsended);
			//  print_r($transaction);exit;

			#transaction recues 
			$urlreceived = "http://cloudbpay.bvortex.com/index.php/api/get_received_tx/" . $this->session->user_id;
			$chreceived = curl_init();
			curl_setopt($chreceived, CURLOPT_URL, $urlreceived);
			curl_setopt($chreceived, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($chreceived, CURLOPT_POST, 1);
			$resultreceived = curl_exec($chreceived);
			$transactionreceived = json_decode($resultreceived);

			// print_r($transactionreceived);exit;
			$style['style'] = $this->load->view('style', "", true);
			$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
			$style['transactionsended'] = $transactionsended;
			$style['transactionreceived'] = $transactionreceived;
			$this->load->view('dashboard', $style);
		}
		curl_close($ch);
	}

	function logout()
	{
		session_destroy();
		redirect('bpay\loginv');
	}

	function isconnected()
	{
		if ($this->session->connected) {
			# code...
			return true;
		} else {
			$this->session->set_flashdata('notconnected', 'veuillez vous connecter');
			redirect('bpay\loginv');
		}
	}
}
