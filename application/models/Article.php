<?php
class Article extends CI_Model{

    public function listeArticle(){
        $req = "SELECT * FROM Article";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function insertArticle($titre, $resume, $categorie, $contenu){
        $req = "INSERT INTO Article(titre,resume,idCategorie,contenu) VALUES ('%s','%s',%s,'%s')";
        $req = sprintf($req, $titre, $resume, $categorie, $contenu);
        $this->db->query($req);
    }
    
    
}

?>
