<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpay extends CI_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$style['style'] = $this->load->view('style', "", true);
		$this->load->view('authe',$style);
	}

	public function dashboard(){
		$this->isconnected();
		 #transactions envoyees
		 $url = "http://cloudbpay.bvortex.com/index.php/api/get_sended_tx/" . $this->session->user_id;
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_URL, $url);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($ch, CURLOPT_POST, 1);

		 $resultsended = curl_exec($ch);
		 $transactionsended = json_decode($resultsended);
		 //  print_r($resultsended); 

		 #transaction recues 
		 $urlreceived = "http://cloudbpay.bvortex.com/index.php/api/get_received_tx/" . $this->session->user_id;
		 $chreceived = curl_init();
		 curl_setopt($chreceived, CURLOPT_URL, $urlreceived);
		 curl_setopt($chreceived, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($chreceived, CURLOPT_POST, 1);
		 $resultreceived = curl_exec($chreceived);
		 $transactionreceived = json_decode($resultreceived);
		 
		 // print_r($resultreceived);exit;
		
		 $style['transactionsended'] = $transactionsended;
		 $style['transactionreceived'] = $transactionreceived;
		 $style['style'] = $this->load->view('style', "", true);
		 $style['dashboardlink'] = $this->load->view('dashboardlink', "", true);

		$this->load->view('dashboard', $style);
	}

	public function profile(){
		$this->load->library('phpqrcode/Qrlib');

		$this->isconnected();
		$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		$ch  = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$business = curl_exec($ch);
		$returnedbusiness = json_decode($business);
		
		// foreach ($returnedbusiness as $key => $value) {
		// 	# code...
		// 				//file path for store images
						 
		// 				$SERVERFILEPATH = 'qrcode/';
		// 				$text = $value->business_key;		 	
		// 				$folder = $SERVERFILEPATH;
		// 				$file_name1 = $text.".png";
		// 				$file_name = $folder.$file_name1;
		// 				QRcode::png($text,$file_name,'Q',10,3);
		// }
		// print_r($returnedbusiness); exit;
		$style['business'] =  $returnedbusiness;
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
		$this->load->view('profile', $style);
		 
	}

	public function documentation()
	{
		$this->isconnected();
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
		$this->load->view('documentation', $style);
	}

	public function loginv()
	{
		$style['style'] = $this->load->view('style', "", true);
		$this->load->view('authe',$style);
	}

	public function connexion(){
		
		$url = "http://cloudbpay.bvortex.com/index.php/api/login";
		$datas = array('phone_number' => $_POST['phone_number'], 'password' => $_POST['password']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		$result = curl_exec($ch);
		$donnee = json_decode($result);
		 
		
		// $varferrors = isset($donnee->form_errors)? $donnee->error : null;
		
		if ( isset($donnee->form_errors) || (isset($donnee->error)) ) {
			$this->session->set_flashdata('checkFailed', 'Mot de passe ou numero de telephone incorrect');
			redirect('bpay\loginv');

		} elseif (empty($donnee)) {
			$this->session->set_flashdata('checkFailed', 'Check your internet connexion'); 
			redirect('bpay\loginv');
		}else{
			$data_session = array(
				'pseudo' => $donnee->user->pseudo,
				'tel_airtel' => $donnee->user->tel_airtel,
				'tel_orange'=>$donnee->user->tel_orange,
				'tel_vodacom'=>$donnee->user->tel_vodacom,
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
			//  print_r($resultsended); 

			#transaction recues 
			$urlreceived = "http://cloudbpay.bvortex.com/index.php/api/get_received_tx/" . $this->session->user_id;
			$chreceived = curl_init();
			curl_setopt($chreceived, CURLOPT_URL, $urlreceived);
			curl_setopt($chreceived, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($chreceived, CURLOPT_POST, 1);
			$resultreceived = curl_exec($chreceived);
			$transactionreceived = json_decode($resultreceived);
		 
			// print_r($resultreceived);exit;
			$style['style'] = $this->load->view('style', "", true);
			$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
			$style['transactionsended'] = $transactionsended;
			$style['transactionreceived'] = $transactionreceived;
			$this->load->view('dashboard', $style);
		}
		curl_close($ch);
		 
	}

	public function changenumber(){
		$this->isconnected();
		$url = "http://cloudbpay.bvortex.com/index.php/api/update_phone_number";
		$datas = array('phone_number' => $_POST['old_number'], 'number' => $_POST['new_number']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		$result = curl_exec($ch);
		$decode= json_decode($result);
		
        if ($result) {
            $this->session->set_userdata('tel_airtel', $decode->user->tel_airtel);
            $this->session->set_userdata('tel_vodacom', $decode->user->tel_vodacom);
            $this->session->set_userdata('tel_orange', $decode->user->tel_orange);
            $this->session->set_flashdata('changesuccess', 'Numero changé avec succès !');
            redirect('Bpay\profile');
        }else{
			$this->session->set_flashdata('changesuccess', 'Une erreur s\'est produite !');
			redirect('Bpay\profile');
		}
		// print_r($decode->user->id);
	}
	public function modifprofie()
	{
		$this->isconnected();
	 
		if (isset($_POST['name']) && isset($_POST['pseudo']) && isset($_POST['number']) && isset($_POST['email'])) {
			if (!empty($_POST['name']) && !empty($_POST['pseudo']) && !empty($_POST['number']) && !empty($_POST['email'])) {
				$url = "http://cloudbpay.bvortex.com/index.php/api/update_user_info";
				$datas = array('name' => $_POST['name'], 'pseudo' => $_POST['pseudo'],'number'=>$_POST['number'],'email'=>$_POST['email']);
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
				$result = curl_exec($ch);
				$decode= json_decode($result);
				// print_r($decode); 
				// print_r($decode->user->pseudo);print_r($decode->user->email);exit;
				if ($result) {
					$this->session->set_userdata('pseudo', $decode->user->pseudo);
					$this->session->set_userdata('email', $decode->user->email);
					$this->session->set_userdata('fullname', $decode->user->fullname);
					$this->session->set_flashdata('changesuccess', 'Modification reussie !');
					redirect('Bpay\profile');
				}else{
					$this->session->set_flashdata('changesuccess', 'Une erreur s\'est produite !');
					redirect('Bpay\profile');
				}
			}else{
				$this->session->set_flashdata('changesuccess', 'veuillez remplir tous les champs !');
					redirect('Bpay\profile');
			}
		}elseif (isset($_POST['password']) && isset($_POST['new_password']) && isset($_POST['number']) ) {
			if(!empty($_POST['password']) && !empty($_POST['new_password']) && !empty($_POST['number']) ){
				$url = "http://cloudbpay.bvortex.com/index.php/api/update_user_info";
				$datas = array('password' => $_POST['password'], 'new_password' => $_POST['new_password'],'number'=>$_POST['number'] );
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
				$result = curl_exec($ch);
				$decode= json_decode($result);
				if ($result) {
					 
					$this->session->set_flashdata('changesuccess', 'Modification reussie !');
					redirect('Bpay\profile');
				}else{
					$this->session->set_flashdata('changesuccess', 'Une erreur s\'est produite !');
					redirect('Bpay\profile');
				}
			}else{
				$this->session->set_flashdata('changesuccess', 'veuillez remplir tous les champs !');
					redirect('Bpay\profile');
			}
		 
		}
		
	}
	public function logout(){
		session_destroy();
		redirect('bpay\loginv');
	}


	public function paiement(){

		$this->load->library('phpqrcode/Qrlib');

		$montant= $this->input->post('montant');
		$devise= $this->input->post('devise');
		$business_key= $this->input->post('business_key');	

		$param = "test"; // remember to sanitize that - it is user input!
		
		// we need to be sure ours script does not output anything!!!
		// otherwise it will break up PNG binary!
		
		ob_start("callback");
		
		// here DB request or some processing
		$text = $montant.'/'.$devise.'/'.$business_key;
		$textencoded= base64_encode($text);
		
		// end of processing here
		$debugLog = ob_get_contents();
		ob_end_clean();
		
		// outputs image directly into browser, as PNG stream
		QRcode::png($textencoded); 
	}

	public function isconnected(){
		if ($this->session->connected) {
			# code...
			return true;
		} else {
			$this->session->set_flashdata('notconnected', 'veuillez vous connecter');
			redirect('bpay\loginv');
		}
	}
}
