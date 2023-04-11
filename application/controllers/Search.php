<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->library('session');
          $this->load->model('Entreprise');
	}


    public function search()
    {
        //$keyword = $this->input->get('keyword');
        //var_dumpr($keyword) 
        //$data['resultats'] = $this->Entreprise->search($keyword);
    
        //$this->load->view('template/search_results', $data);
        $idEntreprise = $this->session->userdata('id');
        $search = $this->input->get('search');
        $resultats= $this->Entreprise->getSearch($idEntreprise,$search);
		$data['resultats'] = $resultats;
		$this->load->view('template/plancompta', $data);
}
}
?>