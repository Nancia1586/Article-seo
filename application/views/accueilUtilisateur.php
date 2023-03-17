<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<?php 
    $this->load->model('Utilisateur');
    $type = $this->Utilisateur->isSuperUtilisateur($utilisateur['id']);
    if($type == 1){
?>
<a href="<?php echo $url?>/UtilisateurController/demandeAdmission"><button>Demande d'admission</button></a>
<?php } ?>
<a href="<?php echo $url?>/MatierePremiereController/saisieMatierePage"><button>Saisie matiere premiere</button></a>
<a href="<?php echo $url?>/MatierePremiereController/saisieAchat"><button>Achat matiere premiere</button></a>
<a href="<?php echo $url?>/MatierePremiereController/etatStock"><button>Etat de stock</button></a>
<a href="<?php echo $url?>/MatierePremiereController/achatAFaire"><button>Achat à faire</button></a>
<a href="<?php echo $url?>/ProduitController/saisieFabrication"><button>Fabrication de produit</button></a>
<a href="<?php echo $url?>/ProduitController/stockProduitFini"><button>Etat du stock des produits finis</button></a>

<h1>Bonjour <?php echo $utilisateur['nom']; ?></h1>
