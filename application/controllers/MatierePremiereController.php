<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class MatierePremiereController extends CI_Controller {

    public function saisieMatierePage() {
        $this->load->model('MatierePremiere');
        $data = array();
        $data['matiere'] = $this->MatierePremiere->listeMatierePremiere();
        $this->load->view('insertMatierePremiere', $data);
    }

    public function saisieAchat() {
        $this->load->model('MatierePremiere');
        $data = array();
        $data['matiere'] = $this->MatierePremiere->listeMatierePremiere();
        $this->load->view('achatMatierePremiere', $data);
    }

    public function faireAchat() {
        $this->load->model('MatierePremiere');
        $data = array();
        $date = $_GET['date'];
        $matiere = $_GET['matiere'];
        $quantite = $_GET['quantite'];
        $prix = $_GET['prix'];
        $data['matiere'] = $this->MatierePremiere->listeMatierePremiere();
        $this->MatierePremiere->acheter($date,$matiere,$quantite,$prix);
        $this->MatierePremiere->addStockMatiere($date,$matiere,$quantite);
        redirect('MatierePremiereController/saisieAchat');
    }

    public function insertMatierePremiere() {
        $this->load->model('MatierePremiere');
        $designation = $_GET['designation'];
        $seuil = $_GET['seuil'];
        $this->MatierePremiere->insert($designation, $seuil);
        redirect('MatierePremiereController/saisieMatierePage');
    }

    public function listeAchat() {
        $this->load->model('MatierePremiere');
        $data = array();
        $data['liste'] = $this->MatierePremiere->listeAchat();
        $this->load->view('listeAchatMatierePremiere', $data);
    }

    public function etatStock() {
        $this->load->model('MatierePremiere');
        $data = array();
        $data['matiere'] = $this->MatierePremiere->listeMatierePremiere();
        $this->load->view('etatStock', $data);
    }

    public function achatAFaire() {
        $this->load->model('MatierePremiere');
        $data = array();
        $data['matiere'] = $this->MatierePremiere->listeMatierePremiere();
        $this->load->view('achatAFaire', $data);
    }
}
