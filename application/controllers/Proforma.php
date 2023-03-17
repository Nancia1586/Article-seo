<?php

// defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

// class Proforma extends CI_Controller {

//     /**
//      * Index Page for this controller.
//      *
//      * Maps to the following URL
//      * 		http://example.com/index.php/welcome
//      * 	- or -
//      * 		http://example.com/index.php/welcome/index
//      * 	- or -
//      * Since this controller is set as the default controller in
//      * config/routes.php, it's displayed at http://example.com/
//      *
//      * So any other public methods not prefixed with an underscore will
//      * map to /index.php/welcome/<method_name>
//      * @see https://codeigniter.com/user_guide/general/urls.html
//      */
// //DemandeProforma
// public function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->helper('url');
// 		// $this->load->view('import/header');
// 	}
//     public function faireDemandeProforma() {
//         $this->load->view('import/header-appro');
//         $this->load->view('acceuil');
//     }

//     public function demandeForm() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $data = array();
//         if (isset($_GET['lieulivraison'])) {
//             $_SESSION['lieulivraison'] = $this->input->get('lieulivraison');
//             $_SESSION['delaipaiement'] = $this->input->get('delaipaiement');
//         }
//         $data['nombre'] = $this->DemandeProformaModel->getNombreFournisseurChoisi();
//         $data['choisi'] = $this->DemandeProformaModel->getFournisseurChoisi();
//         $data['nonchoisi'] = $this->DemandeProformaModel->getFournisseurNonChoisi();
//         if (isset($_GET['filtre'])) {
//             $data['filtre'] = $this->DemandeProformaModel->filtre($_GET['filtre']);
//         }
//         $this->load->view('demandeProforma', $data);
//     }

//     public function demandeProforma() {
//         $this->load->model('DemandeProformaModel');
//         $idFournisseur = $this->input->get('idFournisseur');
//         $lieulivraison = $this->input->get('lieulivraison');
//         $delaipaiement = $this->input->get('delaipaiement');
//         $this->DemandeProformaModel->choisirFournisseur($idFournisseur, $lieulivraison, $delaipaiement);
//         echo "Fournisseur choisi";
//     }

//     public function annulationChoix() {
//         $this->load->model('DemandeProformaModel');
//         $fournisseurId = $this->input->get('fournisseurId');
//         $iddemandeproforma = $this->input->get('iddemandeproforma');
//         $this->DemandeProformaModel->annulerChoix($iddemandeproforma);
//         redirect('Proforma/demandeForm');
//     }

//     public function filtrer() {
//         $filtre = $this->input->get('filtre');
//         redirect('Proforma/demandeForm?filtre=' . $filtre);
//     }

//     public function validerDemande() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $this->DemandeProformaModel->validerDemandeProforma();
//         $data['listevalide'] = $this->DemandeProformaModel->getDemandeValide();
//         $data = array();
//         $data['nombre'] = $this->DemandeProformaModel->getNombreFournisseurChoisi();
//         $data['listevalide'] = $this->DemandeProformaModel->getDemandeValide();
//         $this->load->view('fournisseurChoisi', $data);
//     }

// //Saisie et Liste proforma
//     public function saisirProformaForm() {
//         $this->load->view('import/header-appro');
//         $this->load->model('SaisieProformaModel');
//         $data = array();
//         $data['fournisseur'] = $this->SaisieProformaModel->getFournisseurById($_SESSION['idfournisseur']);
//         $data['sousproforma'] = $this->SaisieProformaModel->getListeSousProforma();
//         $this->load->view('saisieProforma', $data);
//     }

//     public function saisirProforma() {
//         $this->load->model('SaisieProformaModel');
//         $_SESSION['idfournisseur'] = $this->input->get('idfournisseur');
//         $iddemandeproforma = $this->input->get('iddemandeproforma');
//         $reference = $this->input->get('reference');
//         $this->SaisieProformaModel->insertProformaMere($_SESSION['idfournisseur'], $iddemandeproforma, $reference);
//         redirect('Proforma/saisirProformaForm');
//     }

//     public function saisirSousProforma() {
//         $this->load->model('SaisieProformaModel');
//         $this->load->model('BRModel');

//         $idsug = $this->input->get('idsuggestion');
//         $quantite = $this->input->get('quantite');
//         $rubrique = $this->input->get('rubrique');
//         $designation =  $this->BRModel->getNomSuggestion($idsug);
//         $prixunitaire = $this->input->get('prixunitaire');
//         $qualite = $this->input->get('qualite');
//         // $notequalite = $this->input->get('notequalite');
//         $iddemandeproforma = $this->input->get('iddemandeproforma');
//         $reference = $this->input->get('reference');
//         $this->SaisieProformaModel->insertSousProforma($idsug,$quantite, $rubrique, $designation, $prixunitaire, $qualite);
//         redirect('Proforma/saisirProformaForm');
//     }

//     public function voirProforma() {
//         $this->load->view('import/header-appro');
//         $this->load->model('SaisieProformaModel');
//         $data = array();
//         $idproforma = $this->input->get('idproforma');
//         $iddemandeproforma = $this->input->get('iddemandeproforma');
//         $data['comparaison'] = $this->SaisieProformaModel->getComparaisonProduit($idproforma);
//         $data['notequantite'] = $this->SaisieProformaModel->getNoteQuantite($idproforma);
//         $data['moyennequalite'] = $this->SaisieProformaModel->getMoyenneQualite($idproforma);
//         $data['moyennequantite'] = $this->SaisieProformaModel->getMoyenneQuantite($idproforma);
//         $data['nom_fournisseur'] = $this->input->get('nom_fournisseur');
//         $data['adresse_fournisseur'] = $this->input->get('adresse_fournisseur');
//         $data['sousproforma'] = $this->SaisieProformaModel->getSousProforma($iddemandeproforma);
//         $this->load->view('proformaDocument', $data);
//     }

//     public function allProformaDemande() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $data = array();
//         $data['listeDemandeProforma'] = $this->DemandeProformaModel->listeProformaDemande();
//         $this->load->view('listeDemandeProforma', $data);
//     }

//     public function detailProformaDemande() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $data = array();
//         $datedemande = $this->input->get('datedemande');
//         $data['details'] = $this->DemandeProformaModel->detailProformaDemande($datedemande);
//         $this->load->view('detailListeDemandeProforma', $data);
//     }

//     public function voirProformaViaListe() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $data = array();
//         $iddemandeproforma = $this->input->get('iddemandeproforma');
//         $data['sousproforma'] = $this->DemandeProformaModel->voirProformaDoc($iddemandeproforma);
//         $data['nom_fournisseur'] = $this->input->get('nom_fournisseur');
//         $data['adresse_fournisseur'] = $this->input->get('adresse_fournisseur');
//         $this->load->view('voirProformaViaListe', $data);
//     }

//     public function demandeSource() {
//         $this->load->view('import/header-appro');
//         $this->load->model('DemandeProformaModel');
//         $data = array();
//         $iddemande = $this->input->get('iddemande');
//         $data['sousDemandeSource'] = $this->DemandeProformaModel->getSousDemandeSource($iddemande);
//         $data['demandeSource'] = $this->DemandeProformaModel->getDemandeSource($iddemande);
//         $this->load->view('voirDemandeSource', $data);
//     }

// }

?>
