<?php
// class SaisieProformaModel extends CI_Model{

//     public function getIdProforma(){
//         $requete = "SELECT * FROM Proforma ORDER BY idProforma DESC LIMIT 1";
//         $query = $this->db->query($requete);
//         $idproforma = 0;
//         foreach($query->result_array() as $row){
//             $idproforma = $row['idproforma'];
//         }
//         return $idproforma;
//     }

//     public function getFournisseurById($id){
//         $requete = "SELECT * FROM Fournisseur where idFournisseur=%s";
//         $requete = sprintf($requete,$id);
//         $query = $this->db->query($requete);
//         return $query->result_array();
//     }

//     public function getListeSousProforma(){
//         $requete = "select * from sousproforma sp join proforma p on sp.idproforma=p.idproforma where sp.idproforma=%s";
//         $idproforma = $this->getIdProforma();
//         $requete = sprintf($requete,$idproforma);
//         $query = $this->db->query($requete);
//         return $query->result_array();
//     }

//     public function insertProformaMere($idfournisseur,$iddemandeproforma,$reference){
//         $requete = "insert into Proforma(idfournisseur,iddemandeproforma,reference) values ('%s','%s','%s')";
//         $requete = sprintf($requete,$idfournisseur,$iddemandeproforma,$reference);
//         $this->db->query($requete);
//         echo $requete;
//     }

//     public function insertSousProforma($idsug,$quantite,$rubrique,$designation,$prixunitaire,$qualite){
//         $requete = "insert into SousProforma(idsuggestion,idproforma,quantite,rubrique,designation,prixunitaire,qualite,notequalite) values (%s,%s,'%s','%s','%s','%s','%s',0)";
//         $idproforma = $this->getIdProforma();
//         $requete = sprintf($requete,$idsug,$idproforma,$quantite,$rubrique,$designation,$prixunitaire,$qualite);
//         $this->db->query($requete);
//     }

//     public function getComparaisonProduit($idproforma){
//         $requete = "select * from sousproforma sp join proforma p on sp.idproforma=p.idproforma join proformademande pd on pd.iddemandeproforma=p.iddemandeproforma join demandegrouper dg on sp.designation=dg.nom where sp.idproforma=".$idproforma;
//         $query = $this->db->query($requete);
//         return $query->result_array();
//     }

//     public function getSousProforma($iddemandeproforma){
//         $requete = "select * from sousproforma sp join proforma p on sp.idproforma=p.idproforma where iddemandeproforma=".$iddemandeproforma;
//         $query = $this->db->query($requete);
//         return $query->result_array();
//     }

//     public function getNoteQuantite($idproforma){
//         $comp = $this->getComparaisonProduit($idproforma);
//         $i = 0;
//         $note = array();
//         foreach($comp as $c){
//             $note[$i] = ($c['quantite'] * 5) / $c['nombre'];
//             $i++;
//         }
//         return $note;
//     }    

//     public function getNombreProduit($idproforma){
//         $requete = "SELECT count(*) FROM SousProforma WHERE idproforma=".$idproforma;
//         $query = $this->db->query($requete);
//         $produit = 0;
//         foreach($query->result_array() as $row){
//             $produit = $row['count'];
//         }
//         return $produit;
//     }

//     public function getMoyenneQualite($idproforma){
//         $requete = "SELECT sum(notequalite) FROM SousProforma WHERE idproforma=".$idproforma;
//         $query = $this->db->query($requete);
//         $produit = $this->getNombreProduit($idproforma);
//         $moyenne = 0;
//         foreach($query->result_array() as $row){
//             $moyenne = $row['sum'] / $produit;
//         }
//         return $moyenne;
//     }

//     public function getSommeNoteQuantite($idproforma){
//         $notequantite = $this->getNoteQuantite($idproforma);
//         $somme = 0;
//         for($i=0; $i<count($notequantite); $i++){
//             $somme = $somme + $notequantite[$i];
//         }
//         return $somme;
//     }

//     public function getMoyenneQuantite($idproforma){
//         $somme = $this->getSommeNoteQuantite($idproforma);
//         $produit = $this->getNombreProduit($idproforma);
//         $moyenne = $somme / $produit;
//         return $moyenne;
//     }
// }

?>
