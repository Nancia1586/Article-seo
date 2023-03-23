<?php
class Categorie extends CI_Model{

    public function listeCategorie(){
        $req = "SELECT * FROM Categorie";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function getCategorie($id){
        $req = "SELECT * FROM Categorie where id = ".$id;
        $query = $this->db->query($req);
        
        return $query->result_array(); 
    }
    
}

?>
