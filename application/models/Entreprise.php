<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Entreprise extends CI_Model {
          public function __construct()
          {
               $this->load->database();
          }
          public function getInformation($id){
               $sql = "SELECT * from entreprise where id=%s";
               $sql = sprintf($sql,$this->db->escape($id));
               $query = $this->db->query($sql);
               $row = $query->row_array();
               $result = array(
                    'id' => $row['id'],
                    'idUser' => $row['idUser'],
                    'nom' => $row['nom'],
                    'objet' => $row['objet'],
                    'siege' => $row['siege'],
                    'Adresse_d_exploitation' => $row['Adresse_d_exploitation'],
                    'nom_dirigeant' => $row['nom_dirigeant'],
                    'date_creation' => $row['date_creation'],
                    'numero_identification' => $row['numero_identification'],
                    'numero_statistique' => $row['numero_statistique'],
                    'numero_registre_commerce' => $row['numero_registre_commerce'],
                    'status' => $row['status']
               );
               return $result;
          }
          public function getExercice($identreprise) {
               $sql = "SELECT * FROM exercice where idEntreprise = %s";
               $sql = sprintf($sql, $identreprise);
               $query = $this->db->query($sql); 
               return $query->result_array(); 
          }
          public function addExercice($data){
               $query = "INSERT INTO exercice(idEntreprise,nom, debut, fin ) VALUES(%s,%s,%s,%s)";
               $query = sprintf($query,$this->db->escape($data['idEntreprise']),$this->db->escape($data['nom']),$this->db->escape($data['debut']), $this->db->escape($data['fin']));
               $this->db->query($query);
          }
          public function deleteExercice($id){
               $query = "DELETE from exercice where id = %d";
               $this->db->query(sprintf($query, $id));
          }
          public function getPlanCompta($identreprise) {
               $sql = 'SELECT * FROM plan where idEntreprise = %s';
               $sql = sprintf($sql, $identreprise);
               $query = $this->db->query($sql); 
               return $query->result_array(); 
          }

          public function getPlanComptalimited($identreprise,$limit,$depart) {
               $sql = 'SELECT * FROM plan where idEntreprise = %s limit %d offset %d';
               $sql = sprintf($sql, $identreprise,$limit,$depart);
               $query = $this->db->query($sql); 
               return $query->result_array(); 
          }

          public function deleteCompte($id){
               $query = "DELETE from plan where numero = %s";
               $this->db->query(sprintf($query, $id));
          }
          public function addPCompte($data){
               $query = "INSERT INTO plan(idEntreprise,numero, intitule) VALUES(%s,%s,%s)";
               $query = sprintf($query,$this->db->escape($data['idEntreprise']),$this->db->escape($data['numero']),$this->db->escape($data['intitule']));
               $this->db->query($query);
          }
          public function getIdexercice($nom){
               $sql = "SELECT id FROM exercice where nom = %s";
               $sql = sprintf($sql,$this->db->escape($nom));
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row['id'];
          }
          
          public function getDevise($identreprise){
               $sql = 'SELECT * FROM montant where idEntreprise = %s';
               $sql = sprintf($sql, $identreprise);
               $query = $this->db->query($sql);
               return $query->result_array();
          }

          public function deleteDevise($device){
               $query = "DELETE from montant where devise = '%s'";
               $this->db->query(sprintf($query, $device));
          }

          public function updateDevise($data){
               $query='UPDATE montant SET devise = %s ,devise_equivalence = %s WHERE devise = %s';
               $query = sprintf($query,$this->db->escape($data['devi']),$this->db->escape($data['equivalence']),$this->db->escape($data['devise']));
               $this->db->query($query);
          }
          public function getDeviseI($device) {
               $sql = "SELECT * FROM montant where devise = '%s'";
               $sql = sprintf($sql, $device);
               $query = $this->db->query($sql); 
               return $query->result_array(); 
          }

          public function addDevise($data){
               $query = "INSERT INTO montant(idEntreprise,devise,devise_equivalence) VALUES(%s,%s,%s)";
               $query = sprintf($query,$this->db->escape($data['idE']),$this->db->escape($data['device']),$this->db->escape($data['device_equivalence']));
               $this->db->query($query);
          }

          public function addEcriture($data){
               $query = "INSERT INTO ecriture(idExercice,daty,libelle,refer) VALUES(%s,%s,%s,%s)";
               $query = sprintf($query,$this->db->escape($data['idExercice']),$this->db->escape($data['daty']),$this->db->escape($data['libelle']),$this->db->escape($data['reference']));
               $this->db->query($query);
          }
          public function getIdEcriture($libelle,$daty){
               $sql = "SELECT id FROM ecriture where libelle = %s and daty = %s";
               $sql = sprintf($sql,$this->db->escape($libelle),$this->db->escape($daty));
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row['id'];
          }
          public function AddMouve($data){
               $query = "INSERT INTO mouvement VALUES(%s,%s,%s,%s,%s,%s,%s)";
               $query = sprintf($query,$this->db->escape($data['idecrit']),$this->db->escape($data['compte']),$this->db->escape($data['tiers']),$this->db->escape($data['debit']),$this->db->escape($data['credit']),$this->db->escape($data['quantite']),$this->db->escape($data['devise']));
               $this->db->query($query);
          }
          public function getGrandlivre($idExercice){
               $sql = 'SELECT * FROM grandlivre where idExercice = %s';
               $sql = sprintf($sql, $idExercice);
               $query = $this->db->query($sql);
               return $query->result_array();
          }
          public function deleteEntreprise($id){
               $query = "DELETE from entreprise where id = %s";
               $this->db->query(sprintf($query, $id));
          }
          public function updateEntreprise($data, $id){
               $query = "UPDATE entreprise SET nom = %s, objet = %s, siege = %s, Adresse_d_exploitation = %s, nom_dirigeant = %s, date_creation = %s, numero_identification = %s, numero_statistique = %s, numero_registre_commerce = %s, status = %s WHERE id = $id";
               $sql = sprintf($query,
                    $this->db->escape($data['nom']),
                    $this->db->escape($data['objet']),
                    $this->db->escape($data['siege']),
                    $this->db->escape($data['adresse']),
                    $this->db->escape($data['dirigeant']),
                    $this->db->escape($data['creation']),
                    $this->db->escape($data['identifie']),
                    $this->db->escape($data['stat']),
                    $this->db->escape($data['registre']),
                    $this->db->escape($data['status'])
               );
               $this->db->query($sql);
          }
          public function getbalance($idExercice){
               $sql = "select * from ball where idExercice=%s";
               $sql = sprintf($sql, $idExercice);
               $query = $this->db->query($sql);
               return $query->result_array();
          }
          public function get_info_balance($idExercice){
               $sql =" select en.nom,e.nom as exercice,e.debut,e.fin from exercice as e join entreprise as en on en.id=e.idEntreprise  where e.id=%s";
               $sql = sprintf($sql, $idExercice);
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row;
          }
          public function totalbalance($idExercice){
               $sql = "select * from total_balance where idExercice=%s";
               $sql = sprintf($sql, $idExercice);
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row; 
          }
          public function getSearch($idEntreprise,$search) {
               $sql = "SELECT * FROM plan WHERE intitule LIKE '$search%' and idEntreprise=$idEntreprise;";
               $query = $this->db->query($sql);
               return $query->result_array();
           }
     }

?>