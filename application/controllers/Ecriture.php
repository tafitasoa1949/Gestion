<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ecriture extends CI_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->library('session');
          $this->load->model('Entreprise');
	}
     public function index(){
          $idEntreprise = $this->session->userdata('id');
          $id = $_GET['id'];
          $this->session->set_userdata('idExercice',$id);
          $data = array(
               'id' => $id,
          );
          $this->load->view('template/ecriture',$data);
     }
     public function retour(){
          $idExo = $this->session->userdata('idExercice');
          $data = array(
               'id' => $idExo
          );
          $this->load->view('template/ecriture',$data);
     } 
     public function addEcriture(){
          $idExo = $this->session->userdata('idExercice');
          $data = array(
               'daty' => $this->input->get('daty'),
               'libelle' => $this->input->get('libelle'),
               'reference' => $this->input->get('reference'),
               'idExercice' => $idExo
          );
          $this->Entreprise->addEcriture($data);
          $idecrit = $this->Entreprise->getIdEcriture($data['libelle'],$data['daty']);
          $this->session->set_userdata('idEcrit',$idecrit);
          $idEntreprise = $this->session->userdata('id');
          $Alldevise = $this->Entreprise->getDevise($idEntreprise);
          $data = array(
               'idEcrit' => $idecrit,
               'devise' => $Alldevise
          );
          $this->load->view('template/mouvement',$data);
     }
     public function addMouve(){
          $compte = $this->input->get('compte');
          if (strlen($compte) <= 5) {
               $compte = str_pad($compte,5,"0",STR_PAD_RIGHT);
               $compte = (int) $compte;
               $data = array(
                    'compte' => $compte,
                    'tiers' => $this->input->get('tiers'),
                    'debit' => $this->input->get('debit'),
                    'credit' => $this->input->get('credit'),
                    'quantite' => $this->input->get('quantite'),
                    'devise' => $this->input->get('devise'),
                    'idecrit' => $this->input->get('idecrit')
               ); 
          }
          $this->Entreprise->AddMouve($data);
          $idecrit = $this->session->userdata('idEcrit');
          $idEntreprise = $this->session->userdata('id');
          $Alldevice = $this->Entreprise->getDevise($idEntreprise);
          $data1 = array(
               'idEcrit' => $idecrit,
               'devise' => $Alldevice
          );
          $this->load->view('template/mouvement',$data1);
     }
     public function grandLivre(){
          $idExo = $this->session->userdata('idExercice');
          $grandlivre = $this->Entreprise->getGrandlivre($idExo);

          $data = array(
               'livre' => $grandlivre
          );
          $this->load->view('template/grandlivre',$data);
     } 
     public function VoirBalance(){
          $idExo = $this->session->userdata('idExercice');
          $balance = $this->Entreprise->getbalance($idExo);
          $info = $this->Entreprise->get_info_balance($idExo);
          $total = $this->Entreprise->totalbalance($idExo);
          $data = array(
                'balance' => $balance,
                'info' => $info,
                'total' => $total
          );
          $this->load->view('template/balance',$data);
     }  
}