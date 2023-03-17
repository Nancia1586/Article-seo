<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<h2>Historique des achats</h2>
<table width="800" border="1">
    <tr>
        <td>Date</td>
        <td>Matiere premiere</td>
        <td>Quantite</td>
        <td>Prix unitaire</td>
        <td>Montant total</td>
    </tr>
    <?php foreach($liste as $row){ ?>
    <tr>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['quantite']; ?></td>
        <td><?php echo $row['prixunitaire']; ?></td>
        <td><?php echo $row['total']; ?></td>
    </tr>
    <?php } ?>
</table>
