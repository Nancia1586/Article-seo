<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class ProduitController extends CI_Controller {

    public function saisieFabrication() {
        $this->load->model('Produit');
        $data = array();
        $data['produit'] = $this->Produit->listeProduit();
        $this->load->view('fabricationProduit', $data);
    }

    public function insertFabrication() {
        $this->load->model('Produit');
        $date = $_GET['date'];
        $produit = $_GET['produit'];
        $quantite = $_GET['quantite'];
        $this->Produit->insertFabrication($date,$produit,$quantite);
        redirect('ProduitController/saisieFabrication');
    }

    public function listeFabrication() {
        $this->load->model('Produit');
        $data = array();
        $data['fabrication'] = $this->Produit->listeFabrication();
        $this->load->view('listeFabricationProduit', $data);
    }

    public function validerFabrication() {
        $this->load->model('Produit');
        $this->load->model('MatierePremiere');
        $produitId = $_GET['produitId'];
        $quantite = $_GET['quantite'];
        $id = $_GET['id'];
        $matiere = $this->MatierePremiere->listeMatierePremiere();
        $this->Produit->addStockProduit($produitId,$quantite);
        foreach($matiere as $row){
            $quant = $this->MatierePremiere->quantiteMatiereUtilise($produitId,$quantite,$row['id']);
            $this->MatierePremiere->addStockMatiere($row['id'],$quant);
        }
        $this->Produit->updateStateFabrication($id);
        redirect('ProduitController/listeFabrication');
    }

    public function stockProduitFini() {
        $this->load->model('Produit');
        $data = array();
        $data['liste'] = $this->Produit->listeStockProduit();
        $this->load->view('listeStockProduit', $data);
    }
}
