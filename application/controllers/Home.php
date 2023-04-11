<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Entreprise');
		$this->limit=2;
	}
	public function index(){
		
		$id = $this->session->userdata('id');
		$information = $this->Entreprise->getInformation($id);
		$donnees = array(
			'info' => $information
		);
		$this->load->view('template/home',$donnees);
	}
     public function exercice(){
		$idEntreprise = $this->session->userdata('id');
		$resultats = $this->Entreprise->getExercice($idEntreprise);
		$data['resultats'] = $resultats;
		$this->load->view('template/exercice',$data);
     }

	public function voir_exo(){
		$this->load->view('template/addexo');
	}
	public function voir_plancompta($page=1){
		$page = $this->limit*($page-1);
		$idEntreprise = $this->session->userdata('id');
		$allplancompta = $this->Entreprise->getPlanCompta($idEntreprise);
		$pages = count($allplancompta)/$this->limit;
		$pages = ceil($pages);
		$resultats = $this->Entreprise->getPlanComptalimited($idEntreprise,$this->limit,$page);
		$data['resultats'] = $resultats;
		$data['pages'] = $pages;
		$this->load->view('template/plancompta',$data);
	}
	public function devise(){
		$idEntreprise = $this->session->userdata('id');
		$resultats = $this->Entreprise->getDevise($idEntreprise);
		$data['resultats'] = $resultats;
		$this->load->view('template/devise',$data);
     }
	public function deleteDev(){
          $devise = $_GET['devise'];
          $this->Entreprise->deleteDevise($devise);
          redirect('Home/devise');
     }
	public function getdev(){
          $devise = $_GET['devise'];
          $data['resultats']= $this->Entreprise->getDeviseI($devise);
          $this->load->view('template/updateDevise',$data);
          
     }
	public function traitementD() {
          try{
			$data = array(
				'devise' => $_GET['devise'],
				'devi' => $this->input->post('devi'),
				'equivalence' => $this->input->post('equivalence')
			);
			// var_dump($data);
			$this->Entreprise->updateDevise($data);
			redirect('Home/devise');
		}catch(Exception $e){
			throw $e;
		}
      
     }
	public function addDev(){
          $data = array(
               'idE' => $this->session->userdata('id'),
               'device' => $this->input->get('device'),
               'device_equivalence' => $this->input->get('equivalence')
          );
          $this->Entreprise->addDevise($data);
          redirect('Home/devise');
     }
	public function deconnect(){
		$this->session->unset_userdata("id");
		redirect('Login');
	}
}
?>