<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<h2>Etat du stock des produits finis</h2>
<table width="800" border="1">
    <tr>
        <td>Produit</td>
        <td>Quantite en stock</td>
    </tr>
    <?php foreach($liste as $row){ ?>
    <tr>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['stock']; ?></td>
    </tr>
    <?php } ?>
</table>
