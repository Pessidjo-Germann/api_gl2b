<?php
class DemandeControler{
       private $demande;

       public function __construct($demande){
            $this->demande = $demande;
       }
       public function getListDemande(){
           $liste= $this->demande->ListeDemandeService();
           return $liste;
       }
}