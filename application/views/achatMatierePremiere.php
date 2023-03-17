<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<form action="<?php echo $url?>/MatierePremiereController/faireAchat" method="get">
    <input type="date" name="date">
    <select name="matiere">
        <?php foreach($matiere as $row){ ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['designation']; ?></option>
        <?php } ?>
    </select>
    <input type="text" name="quantite">
    <input type="text" name="prix" placeholder="Prix unitaire">
    <input type="submit" value="Ajouter">
</form>
<a href="<?php echo $url?>/MatierePremiereController/listeAchat"><button>Voir l'historique des achats</button></a>
