<?php
class MatierePremiere extends CI_Model{

    public function insert($designation, $seuil){
        $req = "INSERT INTO MatierePremiere(designation,seuil) VALUES ('%s',%s)";
        $req = sprintf($req, $designation, $seuil);
        $this->db->query($req);
    }

    public function listeMatierePremiere(){
        $req = "SELECT * FROM MatierePremiere";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function addStockMatiere($matiere, $quantite){
        $req = "INSERT INTO StockMatiere(date,matierePremiereId,quantite) VALUES (current_date,%s,%s)";
        $req = sprintf($req, $matiere, $quantite);
        $this->db->query($req);
    }

    public function acheter($date, $matiere, $quantite, $prix){
        $req = "INSERT INTO AchatMatiere(date,matierePremiereId,quantite,prixUnitaire) VALUES ('%s',%s,%s,%s)";
        $req = sprintf($req, $date, $matiere, $quantite, $prix);
        $this->db->query($req);
    }

    public function getMatierePremiere($id){
        $req = "SELECT * FROM MatierePremiere where id = %s";
        $req = sprintf($req, $id);
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function listeAchat(){
        $req = "SELECT * FROM V_HistoriqueAchat";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function pourcentageUtilise($idProduit, $idMatiere){
        $req = "SELECT * FROM Formule where produitId = %s and matierePremiereId = %s";
        $req = sprintf($req, $idProduit, $idMatiere);
        $query = $this->db->query($req);
        $pourcentage = 0;
        foreach($query->result_array() as $key){
            $pourcentage = $key['pourcentage'];
        }
        return $pourcentage;
    }

    public function sommeAchat($idMatiere){
        $req = "SELECT sum(quantite) as somme FROM V_HistoriqueAchat where matierePremiereId = %s";
        $req = sprintf($req, $idMatiere);
        $query = $this->db->query($req);
        $somme = 0;
        foreach($query->result_array() as $key){
            $somme = $key['somme'];
        }
        return $somme;
    }

    public function sommeFabrique($idMatiere){
        $req = "SELECT * FROM Fabrication";
        $query = $this->db->query($req);
        $result = 0;
        foreach($query->result_array() as $key){
            $pourcentage = $this->pourcentageUtilise($key['produitid'], $idMatiere);
            $result = $result + (($pourcentage * $key['quantite']) / 100);
        }
        return $result;
    }

    // public function enStock($idMatiere){
    //     $achat = $this->sommeAchat($idMatiere);
    //     $fabrique = $this->sommeFabrique($idMatiere);
    //     $reste = $achat - $fabrique;
    //     return $reste;
    // }

    public function enStock($idMatiere){
        $req = "SELECT * FROM StockMatiere where matierePremiereId = %s";
        $req = sprintf($req, $idMatiere);
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function quantiteMatiereUtilise($idProduit, $quantite, $idMatiere){
        $pourcentage = $this->pourcentageUtilise($idProduit, $idMatiere);
        $quant = ($pourcentage * $quantite) / 100;
        return $quant;
    }
}

?>
