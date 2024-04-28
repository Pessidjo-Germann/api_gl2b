<?php

header("Access-Control-Origin:v*");
header("Content-Type: application/json");
header("Access-Control-Methods: GET");

//on verifie que la methode d'appel est la bonne
if($_SERVER['REQUEST_METHOD']=='GET'){
    //j'inclu la bd et le controler et modele
    require_once('config.php');
    require_once('modele/DemandeModele.php');
    require_once('controller/DemandeControler.php');
    $demande=new DemandeModele($db);#je creais une instance
    $demandeControl=new DemandeControler($demande);#je creais une instance

    $traitement=$demandeControl->getListDemande();#je lance la methode
        //les donnees sont disponibles
    if($traitement->rowCount() > 0){
        $row= $traitement->fetchAll(PDO::FETCH_ASSOC);
        http_response_code(202);//on envoie un code de confirmation
        echo json_encode($row);
    }


}else{
    http_response_code(405);//on envoie un code d'erreur
    echo json_encode(array('error'=> 'la methode n est pas autorise'));
}