<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<h2>Liste fabrication produit</h2>
<table width="800" border="1">
    <tr>
        <td>Date</td>
        <td>Produit</td>
        <td>Quantite</td>
        <td></td>
    </tr>
    <?php foreach($fabrication as $row){ ?>
    <tr>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['quantite']; ?></td>
        <td>
            <?php if($row['etat'] == 0){ ?>
            <form action="<?php echo $url?>/ProduitController/validerFabrication" method="get">
                <input type="hidden" name="produitId" value="<?php echo $row['produitid']; ?>">
                <input type="hidden" name="quantite" value="<?php echo $row['quantite']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="submit" value="VALIDER">
            </form>
            <?php }else{ ?>
                <p style="color:green;">Validée</p>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
</table>
