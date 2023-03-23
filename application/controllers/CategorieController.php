<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategorieController extends CI_Controller {

    public function listeCategorie() {
        $this->load->model('Categorie');
        $data = array();
        $data['categorie'] = $this->Categorie->listeCategorie();
        $this->load->view('listeCategorie', $data);
    }

}
