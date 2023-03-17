<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends CI_Controller {

    public function listeArticle() {
        $this->load->model('Article');
        $data = array();
        $data['article'] = $this->Article->listeArticle();
        $this->load->view('listeArticle', $data);
    }

    public function insertArticlePage() {
        $this->load->model('Categorie');
        $data = array();
        $data['categorie'] = $this->Categorie->listeCategorie();
        $this->load->view('insertArticleForm', $data);
    }

    public function insertArticle() {
        $this->load->model('Article');
        $titre = $_GET['titre'];
        $resume = $_GET['resume'];
        $categorie = $_GET['categorie'];
        $contenu = $_GET['contenu'];
        echo "TITRE ".$titre;
        echo "RESUME ".$resume;
        echo "CATEGORIE ".$categorie;
        echo "CONTENU ".$contenu;
        $this->Article->insertArticle($titre,$resume,$categorie,$contenu);
        redirect('ArticleController/insertArticlePage');
    }
}
