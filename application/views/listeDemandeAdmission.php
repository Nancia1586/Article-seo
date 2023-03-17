<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<table width="800" border="1">
    <tr>
        <td>Nom</td>
        <td>Email</td>
        <td></td>
    </tr>
    <?php foreach($demande as $row){ ?>
    <tr>
        <td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <form action="<?php echo $url?>/UtilisateurController/validationDemandeAdmission" method="get">
                <input type="hidden" name="idUser" value="<?php echo $row['id']; ?>">
                <input type="submit" value="VALIDER">
            </form>
        </td>
    </tr>
    <?php } ?>
</table>