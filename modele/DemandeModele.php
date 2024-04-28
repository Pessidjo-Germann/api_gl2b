<?php
class DemandeModele{
    private $db;

    public function __construct($db) {
        $this->db=$db;
    }

    public function ListeDemandeService(){
        $req="SELECT matricule, nom,prenom from etudiant";
        $pre= $this->db->prepare($req);
        $pre->execute();
        
        return $pre;
    }
}