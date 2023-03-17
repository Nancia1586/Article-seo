<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
    $this->load->model('MatierePremiere');
?>
<h2>Liste des achats à faire</h2>
<table width="800" border="1">
    <tr>
        <td>Designation</td>
        <td>Seuil</td>
        <td>Reste en stock</td>
    </tr>
    <?php foreach($matiere as $row){ 
        if($this->MatierePremiere->enStock($row['id']) < $row['seuil']){ ?>
        <tr>
            <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['seuil']; ?></td>
            <td><?php echo $this->MatierePremiere->enStock($row['id']); ?></td>
        </tr>
        <?php } ?>
    <?php } ?>
</table>
<a href="#"><button>Exporter excel</button></a>
