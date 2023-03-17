<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<form action="<?php echo $url?>/ProduitController/insertFabrication" method="get">
    <input type="date" name="date">
    <select name="produit"> 
        <?php foreach($produit as $row){ ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['designation']; ?></option>
        <?php } ?>
    </select>
    <input type="text" name="quantite">
    <input type="submit" value="Ajouter">
</form>
<a href="<?php echo $url?>/ProduitController/listeFabrication"><button>Voir la liste</button></a>


