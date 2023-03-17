<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
    $this->load->model('MatierePremiere');
?>
<h2>Etat de stock</h2>
<table width="800" border="1">
    <tr>
        <td>Designation</td>
        <td>Reste en stock</td>
    </tr>
    <?php foreach($matiere as $row){ ?>
    <tr>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $this->MatierePremiere->enStock($row['id']); ?></td>
    </tr>
    <?php } ?>
</table>
