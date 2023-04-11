<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Societe extends CI_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->library('session');
          $this->load->model('Entreprise');
          $this->load->model('Insert');
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
          
          
                    
          // if($fichier){
          //      $ff = fopen($fichier, "r");
          //      if($ff){
          //           while(($row = fgetcsv($ff, 100000000, ",")) !== false){
          //                $data[] = array(
          //                     'numero' => $row[0],
          //                     'intitule' => $row[1]
          //                );
          //           }
          //           fclose($ff);
          //           print_r($data);
          //      }
          // }
          // if (strlen($numero) <= 5) {
          //      $numero = str_pad($numero,5,"0",STR_PAD_RIGHT);
          //      $numero = (int) $numero;
          //      $data = array(
          //           'idEntreprise' => $this->session->userdata('id'),
          //           'numero' => $numero,
          //           'intitule' => $this->input->get('intitule'),
          //      );
          //      $this->Entreprise->addPCompte($data);
          //      redirect('Home/voir_plancompta');
          // }
     }
     public function getcsv(){
          $config['upload_path'] = 'C:\upload_csv'; // dossier pour stocker le fichier csv
          $config['allowed_types'] = 'csv';
          $config['max_size'] = 0; // taille maximale du fichier

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('csv_file')) {
               // erreur de téléchargement
               $error = $this->upload->display_errors();
               echo $error;
          } else {
               // fichier téléchargé avec succès
               $data = $this->upload->data();
               $file_path = $data['full_path'];
               echo "azo";
               
               // Code pour lire les données CSV et les stocker dans un tableau
               $file = fopen($file_path, 'r');
               $data = array();
               $tableau = array();
               $identreprise = $this->session->userdata('id'); 
               while (($line = fgetcsv($file)) !== false) {
                    $indice = array(
                         'numero' => $line[0],
                         'intitule' => $line[1]
                    );
                    array_push($tableau,$indice);
                    
               }
               fclose($file);
               ///print_r($tableau);
               for($i=0 ; $i < count($tableau) ; $i++){
                    $this->Insert->insert_File_csv($identreprise,$tableau[$i]);
               }
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

     public function Aplancompta(){
          $this->load->view('template/addplancomta');
     }
     public function Aexercice(){
          $this->load->view('template/addexercice');
     }
     
     public function Adevise(){
          $this->load->view('template/adddevise');
     }
}
?>