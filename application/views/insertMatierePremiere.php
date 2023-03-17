<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<form action="<?php echo $url?>/MatierePremiereController/insertMatierePremiere" method="get">
    <input type="text" name="designation">
    <input type="text" name="seuil">
    <input type="submit" value="Ajouter">
</form>
<table width="800" border="1">
    <tr>
        <td>Designation</td>
        <td>Seuil</td>
        <td></td>
    </tr>
    <?php foreach($matiere as $row){ ?>
    <tr>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['seuil']; ?></td>
        <td>
            <form action="#" method="get">
                <input type="hidden" name="idMatiere" value=<?php echo $row['id']; ?>">
                <input type="submit" value="ETAT DE STOCK">
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
