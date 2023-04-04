<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Societe extends CI_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->library('session');
          $this->load->model('Entreprise');
	}
     public function addExo(){
          $data = array(
               'idEntreprise' => $this->session->userdata('id'),
               'nom' => $this->input->get('nom'),
               'debut' => $this->input->get('debut'),
               'fin' => $this->input->get('fin')
          );
          $this->Entreprise->addExercice($data);
          redirect('Home/exercice');
     }
     public function deleteExo(){
          $id = $_GET['id'];
          $this->Entreprise->deleteExercice($id);
          redirect('Home/exercice');
     }
     public function deleteCompte(){
          $id = $_GET['numero'];
          $this->Entreprise->deleteCompte($id);
          redirect('Home/voir_plancompta');
     }
     public function addCompte(){
          $numero = $this->input->get('numero');
          $intitule = $this->input->get('intitule');
          if (strlen($numero) <= 5) {
               $numero = str_pad($numero,5,"0",STR_PAD_RIGHT);
               $numero = (int) $numero;
               $data = array(
                    'idEntreprise' => $this->session->userdata('id'),
                    'numero' => $numero,
                    'intitule' => $this->input->get('intitule'),
               );
               $this->Entreprise->addPCompte($data);
               redirect('Home/voir_plancompta');
          }
     }
     public function updateEntre(){
		$id = $_GET['id'];
		$information = $this->Entreprise->getInformation($id);
		$donnees = array(
			'info' => $information
		);
		$this->load->view('template/updateEntreprise',$donnees);
	}
     public function traitementE(){
          $id = $_GET['id'];
          $data = array(
               'id' => $_GET['id'],
			'nom' => $this->input->post('nom'),
			'objet' => $this->input->post('objet'),
			'siege' => $this->input->post('siege'),
			'adresse' => $this->input->post('adresse'),
			'dirigeant' => $this->input->post('dirigeant'),
			'identifie' => $this->input->post('identifie'),
			'stat' => $this->input->post('stat'),
			'registre' => $this->input->post('registre'),
			'status' => $this->input->post('status'),
          );
          $this->Entreprise->updateEntreprise($data,$id);
          redirect('Home/index');
      
     }
     public function deleteEntrep(){
          $id = $_GET['id'];
          $this->Entreprise->deleteEntreprise($id);
          redirect('home/deconnect');
     }
}
?>