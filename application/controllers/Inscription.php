<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Insert');
	}
	function insert_compte(){
		// nom
		$this->form_validation->set_rules('nom','nom',
               'required|min_length[4]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
		// email
		$this->form_validation->set_rules('email','email',
               'required|min_length[5]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
		// contact
		$this->form_validation->set_rules('contact','contact',
               'required|min_length[10]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
		// mot de passe
		$this->form_validation->set_rules('pwd','mot de passe',
               'required|min_length[4]|max_length[30]',
               array(
                    'required' => 'Champ %s est obligatoire',
                    'min_length' =>'trop court',
                    'max_length' => 'trop long'
               )
          )->set_error_delimiters('<div class="text-danger">','</div>');
		// 
		if($this->form_validation->run()){
               $data = array(
		    		'name' => $this->input->get('name'),
		    		'email' => $this->input->get('email'),
		    		'contact' => $this->input->get('contact'),
		    		'mdp' => $this->input->get('pwd')
			);
		
			$this->Insert->insert_compte($data);
			$id = $this->Insert->getId($data['email']);
			$donnees = array(
				'id' => $id
			);
			$this->load->view('template/signsociete',$donnees);
		}else{
			$sign = $this->load->view('template/sign', [], true);
               $this->load->view('template/sign',
                    array(
                         'page' => $sign,
                         'title' => 'sign'
                    )
               ); 
		}
	}
	function insert_entreprise(){
		$data = array(
			'iduser' => $this->input->get('iduser'),
			'nom' => $this->input->get('nom'),
			'objet' => $this->input->get('objet'),
			'siege' => $this->input->get('siege'),
			'adresse' => $this->input->get('adresse'),
			'dirigeant' => $this->input->get('dirigeant'),
			'creation' => $this->input->get('creation'),
			'identifie' => $this->input->get('identifie'),
			'stat' => $this->input->get('stat'),
			'registre' => $this->input->get('registre'),
			'status' => $this->input->get('status'),
		);
		
		$this->Insert->insert_entreprise($data);
		$identreprise = $this->Insert->getIdEntreprise($data['nom']);
		//function getfile csv and insert into database
		// $getfile = $this->input->get('plan');
		// $tableau = array();
		// $fichier = fopen("'".$getfile."'", 'r');
		// while (($ligne = fgetcsv($fichier, 1000, ',')) !== FALSE) {
		// 	$tableau[] = $ligne;
		// }
		// fclose($fichier);
		// for($i=0 ; $i< count($tableau) ;$i++){
		// 	print_r($tableau[$i]);
          // 	echo "<br>";
		// 	// $tab = array(
		// 	// 	'numero' => $tableau[$i][0],
		// 	// 	'intitule' => $tableau[$i][1]
		// 	// );
		// 	// $this->Insert->insert_File_csv(1,$tab);
		// }
		//
		$this->load->model('Entreprise');
		$information = $this->Entreprise->getInformation($identreprise);
		$this->session->set_userdata('id',$identreprise);
		$donnees = array(
			'info' => $information
		);
		$this->load->view('template/home',$donnees);
	}
}