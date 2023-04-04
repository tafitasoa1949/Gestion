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
		$data = array(
		    'name' => $this->input->get('name'),
		    'email' => $this->input->get('email'),
		    'contact' => $this->input->get('contact'),
		    'mdp' => $this->input->get('mdp')
		);
		$this->Insert->insert_compte($data);
		$id = $this->Insert->getId($data['email']);
		$donnees = array(
			'id' => $id
		);
		$this->load->view('template/signsociete',$donnees);
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
		$this->load->model('Entreprise');
		$information = $this->Entreprise->getInformation($identreprise);
		$this->session->set_userdata('id',$identreprise);
		$donnees = array(
			'info' => $information
		);
		$this->load->view('template/home',$donnees);
	}
}