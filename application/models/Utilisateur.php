<?php
class Utilisateur extends CI_Model{

    public function login($email, $mdp){
        $req = "SELECT * FROM Utilisateur where email='%s' and mdp = md5('%s') and etat = 1";
        $req = sprintf($req, $email, $mdp);
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function inscription($nom, $email, $mdp){
        $req = "INSERT INTO Utilisateur(nom,email,mdp,type,etat) VALUES ('%s','%s',md5('%s'),0,0)";
        $req = sprintf($req, $nom, $email, $mdp);
        $this->db->query($req);
    }

    public function isSuperUtilisateur($id){
        $req = "SELECT * FROM Utilisateur where type = 1";
        $query = $this->db->query($req);
        $result = $query->result_array(); 
        $res = false;
        foreach($result as $key){
            if($key['id'] == $id){
                $res = true;
            }
        }
        return $res;
    }

    public function listeDemandeAdmission(){
        $req = "SELECT * FROM Utilisateur where etat = 0";
        $query = $this->db->query($req);
        return $query->result_array(); 
    }

    public function validerDemandeAdmission($id){
        $req = "UPDATE Utilisateur SET etat = 1 where id = %s";
        $req = sprintf($req, $id);
        $this->db->query($req);
    }

    public function getUtilisateur($id){
        $req = "SELECT * FROM Utilisateur where id = %s";
        $req = sprintf($req, $id);
        $query = $this->db->query($req);
        return $query->result_array(); 
    }
}

?>
