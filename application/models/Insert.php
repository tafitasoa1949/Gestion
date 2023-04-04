<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Insert extends CI_Model {
          public function __construct()
          {
               $this->load->database();
          }
          function insert_compte($data){
               $sql = "INSERT INTO Users (name,email,contact,mdp) values(%s,%s,%s,%s)";
               $sql = sprintf($sql,$this->db->escape($data['name']),$this->db->escape($data['email']),$this->db->escape($data['contact']),$this->db->escape($data['mdp']));
               //echo $sql;
               $this->db->query($sql);
          }
          function getId($email){
               $sql = "SELECT id FROM Users where email = %s";
               $sql = sprintf($sql,$this->db->escape($email));
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row['id'];
          }
          function insert_entreprise($data){
               $sql = "INSERT INTO entreprise (idUser,nom,objet,siege,Adresse_d_exploitation,nom_dirigeant,date_creation,numero_identification,numero_statistique,numero_registre_commerce,status) values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
               $sql = sprintf($sql,$this->db->escape($data['iduser']),$this->db->escape($data['nom']),$this->db->escape($data['objet']),$this->db->escape($data['siege']),$this->db->escape($data['adresse']),$this->db->escape($data['dirigeant']),$this->db->escape($data['creation']),$this->db->escape($data['identifie']),$this->db->escape($data['stat']),$this->db->escape($data['registre']),$this->db->escape($data['status']));
               //echo $sql;
               $this->db->query($sql);
          }
          function getIdEntreprise($nom){
               $sql = "SELECT id FROM entreprise where nom = %s";
               $sql = sprintf($sql,$this->db->escape($nom));
               $query = $this->db->query($sql);
               $row = $query->row_array();
               return $row['id'];
          }
          // function getIdSociete($nom){
          //      $sql = "SELECT id FROM entreprise where nom = %s";
          //      $sql = sprintf($sql,$this->db->escape($nom));
          //      $query = $this->db->query($sql);
          //      $row = $query->row_array();
          //      return $row['id'];
          // }
     }
?>