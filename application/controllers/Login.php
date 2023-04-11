<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('login');	
	}
	public function sign(){
		$this->load->view('template/sign');	
	}
	function checkLogin(){
          // email
		$this->form_validation->set_rules('email','email',
               'required|min_length[10]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
          // mot de passe
          $this->form_validation->set_rules('pwd','password',
               'required|min_length[2]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'Minimium 2 caracteres',
                    'max_length' => 'Maximium 30 caracteres'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
          if($this->form_validation->run()){
               $data = array(
                    'email' => $this->input->post('email'),
                    'mdp' => $this->input->post('pwd')
               );
			$this->load->model('Insert');
			$idusers = $this->Insert->checkUser($data);
			
			if($idusers != null){
				$this->load->model('Entreprise');
				$identreprise = $this->Insert->getIdE($idusers);
				$information = $this->Entreprise->getInformation($identreprise);
			 	$this->session->set_userdata('id',$identreprise);
			 	$donnees = array(
			 		'info' => $information
			 	);
                    $this->load->view('template/home',$donnees);
			}else{
				redirect('Login/index');
			}   
          }else{
               $login = $this->load->view('login', [], true);
               $this->load->view('login',
                    array(
                         'page' => $login,
                         'title' => 'Login'
                    )
               ); 
          }
	}

}
