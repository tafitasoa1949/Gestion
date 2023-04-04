<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->library('session');
	}
	public function index(){
		$this->load->view('login');	
	}
	public function sign(){
		$this->load->view('template/sign');	
	}
	function valide(){
          $data = array(
               'email' => 'tafitasoa@gmail.com',
               'pwd' => 'tft'
          );
		$this->form_validation->set_rules('email','email',
               'required|min_length[5]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          );
          $this->form_validation->set_rules('mdp','password',
               'required|min_length[8]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'Minimium 8 caracteres',
                    'max_length' => 'Maximium 30 caracteres'
               )
          );
		if($this->form_validation->run()){
			$email = $this->input->get('email');
          	$mdp = $this->input->get('mdp');
			echo wesh;
		}else{
			$login = $this->load->view('login', [], true);
               $this->load->view('login',
                    array(
                         'page' => $login,
                         'title' => 'Login drepany'
                    )
               ); 
		}
		 $identreprise = 1;
		 $this->load->model('Entreprise');
		 $information = $this->Entreprise->getInformation($identreprise);
		 $this->session->set_userdata('id',$identreprise);
		 $donnees = array(
		 	'info' => $information
		 );
		 $this->load->view('template/home',$donnees);
	}
	//public function main(){
	// 	$profil = array(
	// 		'email' => $this->input->get('email'),
	// 		'mdp' => $this->input->get('mdp')
	// 	);
	// 	$this->load->model("Dao.php");
	// 	if( $this->Dao->check_login($profil['email'],$profil['mdp']) ){
	// 		$util = $this->session->set_userdata("email",$profil['email']);
	// 		redirect('Login/valide');
	// 	}else{
	// 		$this->session->set_flashdata('error','diso leka');
	// 		redirect('Login/index');
	// 	}
	// }
	// public function valide(){
	// 		if($this->session->userdata("email") != ''){
	// 			echo '<h1>Tongasoa '.$this->session->userdata("email").'</h1>';
	// 			echo '<label><a href="'.Login/deconnect.'">Deconnexion</a></label>';
	// 		}else{
	// 			redirect('Login/index');
	// 		}
	// }
	// public function deconnect(){
	// 	$this->session->unset_userdata("email");
	// 	redirect('Login/index');
	// }

}
