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
	
	//bhgjhgjhgjhgj
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
		 #All Business
		 $url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		 $ch  = curl_init();
		 curl_setopt($ch, CURLOPT_URL, $url);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 $business = curl_exec($ch);
		 $returnedbusiness = json_decode($business);
		 //  print_r($resultsended); 

		 #transaction recues 
		 $urlreceived = "http://cloudbpay.bvortex.com/index.php/api/get_received_tx/" . $this->session->user_id;
		 $chreceived = curl_init();
		 curl_setopt($chreceived, CURLOPT_URL, $urlreceived);
		 curl_setopt($chreceived, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($chreceived, CURLOPT_POST, 1);
		 $resultreceived = curl_exec($chreceived);
		 $transactionreceived = json_decode($resultreceived);

		 // active packages
		
		 $packages = "http://cloudbpay.bvortex.com/index.php/Api/active_txlot" ;
		 $chpackages = curl_init(); 
		 curl_setopt($chpackages, CURLOPT_URL, $packages);
		 curl_setopt($chpackages, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($chpackages, CURLOPT_POST, 1);
		 $activepackage = curl_exec($chpackages);
		 $returnedpackages = json_decode($activepackage);




		 // print_r($resultreceived);exit;
		 $style['business'] =  $this->sort_array($returnedbusiness);
		 $style['transactionsended'] = $transactionsended;
		 $style['transactionreceived'] = $transactionreceived;
		 $style['returnedpackages'] = $returnedpackages;
		 $style['style'] = $this->load->view('style', "", true);
		 $style['dashboardlink'] = $this->load->view('dashboardlink', "", true);

		$this->load->view('dashboard', $style);


		// profile 
		
	}
	public function profile(){
		

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
		$text = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->businesskey;	 	
		// 				$folder = $SERVERFILEPATH;
		// 				$file_name1 = $text.".png";
		// 				$file_name = $folder.$file_name1;
		// 				QRcode::png($text,$file_name,'Q',10,3);
		// }
		// print_r($returnedbusiness); exit;
		$style['business'] =  $this->sort_array($returnedbusiness);
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
		$datas = array('phone_number' => $_POST['phone_number'], 'password' =>$_POST['password']);
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
			$this->session->set_flashdata('checkFailed', 'Vérifier votre connexion internet'); 
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
			

			$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
			$ch  = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$business = curl_exec($ch);
			$returnedbusiness = json_decode($business);

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


			// active packages
		
			$packages = "http://cloudbpay.bvortex.com/index.php/Api/active_txlot" ;
			 $chpackages = curl_init(); 
			 curl_setopt($chpackages, CURLOPT_URL, $packages);
			 curl_setopt($chpackages, CURLOPT_RETURNTRANSFER, 1);
			 curl_setopt($chpackages, CURLOPT_POST, 1);
			 $activepackage = curl_exec($chpackages);
			 $returnedpackages = json_decode($activepackage);



		 
			// print_r($resultreceived);;
			$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
			$ch  = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$business = curl_exec($ch);
			$returnedbusiness = json_decode($business);


			$style['business'] =  $this->sort_array($returnedbusiness);
			$style['style'] = $this->load->view('style', "", true);
			$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
			$style['transactionsended'] = $transactionsended;
			$style['returnedpackages'] = $returnedpackages;
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
		var_dump($_POST['pseudo']);
	 
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
				var_dump($result);
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

		$montant= $this->input->post('montant');
		$devise= $this->input->post('devise');
		$business_key= $this->input->post('business_key');	

		

		// $param = "test"; // remember to sanitize that - it is user input!
		
		// // we need to be sure ours script does not output anything!!!
		// // otherwise it will break up PNG binary!
		
		// ob_start("callback");
		
		// // here DB request or some processing
		// $text = $montant.'/'.$devise.'/'.$business_key;
		// $textencoded= base64_encode($text);
		
		// // end of processing here
		// $debugLog = ob_get_contents();
		// ob_end_clean();
		
		// // outputs image directly into browser, as PNG stream
		// QRcode::png($textencoded); 
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

	public function addBusiness (){

		$business_name = $this->input->post('business_name');
		$business_description = $this->input->post('business_description');
		$categorie = $this->input->post('categorie');
		
		$data = array(
			"name" => $business_name,
			"desc" => $business_description,
			"type_id" => $categorie,
			"user_id" => $this->session->user_id
		);
		//$str_data = json_encode($data);
		$url = "http://cloudbpay.bvortex.com/index.php/Api/create_business";
		$requete = $url .'/'. $business_name .'/'. $business_description .'/'. $categorie .'/'.$this->session->user_id;
		$ch = curl_init($requete);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);
		curl_close($ch);

		$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		$ch  = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$business = curl_exec($ch);
		$returnedbusiness = json_decode($business);
		$style['business'] =  $this->sort_array($returnedbusiness);
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);
		$this->load->view('profile', $style);
	}
    

	

	public function subscriptiontwo (){

		$business_id = $this->input->post('business_tx_id');
		$lot_tx_id = $this->input->post('lot_tx_id');
		$currency = $this->input->post('currency');

		
		$data = array(
			"business_id" => $business_id,
			"lot_tx_id" => $lot_tx_id,
			"currency" => $currency,
			"user_id" => $this->session->user_id
		);


		#All Business
		


		$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		$ch  = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$business = curl_exec($ch);
		$returnedbusiness = json_decode($business);

		//$str_data = json_encode($data);
		$url = "http://cloudbpay.bvortex.com/index.php/Api/subscription/";
		$requete = $url .'/'. $business_id .'/'. $lot_tx_id .'/'. $currency .'/'.$this->session->user_id;
		echo($business_id);
		echo($lot_tx_id);
		echo($currency);
		echo($this->session->user_id);
		$ch = curl_init($requete);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);
		

		#transactions envoyees
		$url = "http://cloudbpay.bvortex.com/index.php/api/get_sended_tx/" . $this->session->user_id;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);

		$resultsended = curl_exec($ch);
		$transactionsended = json_decode($resultsended);
		#All Business
		$url = "http://cloudbpay.bvortex.com/index.php/api/getBusiness/" . $this->session->user_id;
		$ch  = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$business = curl_exec($ch);
		$returnedbusiness = json_decode($business);
		//  print_r($resultsended); 

		#transaction recues 
		$urlreceived = "http://cloudbpay.bvortex.com/index.php/api/get_received_tx/" . $this->session->user_id;
		$chreceived = curl_init();
		curl_setopt($chreceived, CURLOPT_URL, $urlreceived);
		curl_setopt($chreceived, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($chreceived, CURLOPT_POST, 1);
		$resultreceived = curl_exec($chreceived);
		$transactionreceived = json_decode($resultreceived);

		// active packages
	   
		$packages = "http://cloudbpay.bvortex.com/index.php/Api/active_txlot" ;
		$chpackages = curl_init(); 
		curl_setopt($chpackages, CURLOPT_URL, $packages);
		curl_setopt($chpackages, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($chpackages, CURLOPT_POST, 1);
		$activepackage = curl_exec($chpackages);
		$returnedpackages = json_decode($activepackage);




		// print_r($resultreceived);exit;
		$style['business'] =  $this->sort_array($returnedbusiness);
		$style['transactionsended'] = $transactionsended;
		$style['transactionreceived'] = $transactionreceived;
		$style['returnedpackages'] = $returnedpackages;
		$style['style'] = $this->load->view('style', "", true);
		$style['dashboardlink'] = $this->load->view('dashboardlink', "", true);

	   $this->load->view('dashboard', $style);

		
		
		

	}



	public function sort_array($business){
		
				foreach($business as $key => $row){
					$business_id[$key] = $row->business_id;
				}
		
				for($i = 0; $i < count($business_id); $i++){
					for($j = 0; $j < count($business_id); $j++){
						if($business_id[$i] > $business_id[$j]){
							$temp = $business_id[$i];
							$business_id[$i] = $business_id[$j];
							$business_id[$j] = $temp;
						}
					}
				}
		
				$newtabbusiness = array();
				for($t = 0; $t < count($business_id); $t++){
					foreach($business as $key => $row){
						if($row->business_id == $business_id[$t] )
						{
							$newtabbusiness[]  = array(
								'business_id' => $row->business_id,
								'user_id' => $row->user_id,
								'type' => $row->type,
								'creation_datetime' => $row->creation_datetime,
								'business_key' => $row->business_key,
								'description' => $row->description,
								'is_expired' => $row->is_expired,
								'dev_key' => $row->dev_key
							);
						}
					}
				}
				
				return $newtabbusiness;
			}
	public function addUser(){
		$business_name = $this->input->post('business_name');
		$business_description = $this->input->post('business_description');
		$categorie = $this->input->post('categorie');
		
		$data = array(
			"business_name" => $business_name,
			"business_description" => $business_description,
			"type_id" => $categorie
		);
		$url = "http://cloudbpay.bvortex.com/index.php/Api/create_business/";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$result = curl_exec($ch);
		curl_close($ch);
		var_dump($result);
	}
	public function subscription(){

		$business_id = $this->input->post('business_id');
		$lot_tx_id = $this->input->post('lot_tx_id');
		$currency = $this->input->post('currency');
		
		$customer_id = $this->input->post('customer_id');

		$datas = array(
			'business_id' => $business_id, 
			'lot_tx_id' => $lot_tx_id,
			'currency'=>$currency,
			'customer_id'=>$customer_id
		);

		$url = "http://cloudbpay.bvortex.com/index.php/Api/subscription";
		$requete = $url .'/'. $business_id .'/'. $lot_tx_id .'/'. $currency .'/'. $this->session->user_id;

		$ch = curl_init($requete);
		var_dump("<br>Requete". $requete);
		var_dump("<br>Ch ". $ch );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		$result = curl_exec($ch);

		/*
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		$result = curl_exec($ch);
*/
		curl_close($ch);
		
		var_dump("Resultat ". $result);
	}
}