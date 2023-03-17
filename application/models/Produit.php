<?php
class Produit extends CI_Model{

    public function listeProduit(){
        $req = "SELECT * FROM Produit";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function insertFabrication($date, $produitId, $quantite){
        $req = "INSERT INTO Fabrication(date,produitId,quantite) VALUES ('%s',%s,%s)";
        $req = sprintf($req, $date, $produitId, $quantite);
        $this->db->query($req);
    }
    
    public function listeFabrication(){
        $req = "SELECT * FROM Fabrication f join Produit p on f.produitId = p.id";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function addStockProduit($produit, $quantite){
        $req = "INSERT INTO StockProduit(date,produitId,quantite) VALUES (current_date,%s,%s)";
        $req = sprintf($req, $produit, $quantite);
        $this->db->query($req);
    }

    public function updateStateFabrication($id){
        $req = "UPDATE Fabrication SET etat = 1 WHERE id = %s";
        $req = sprintf($req, $id);
        $this->db->query($req);
    }

    public function listeStockProduit(){
        $req = "SELECT p.id,p.designation,sum(s.quantite) as stock FROM StockProduit s join Produit p on s.produitId = p.id group by p.id,p.designation";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }
}

?>
