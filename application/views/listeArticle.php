<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<a href="<?php echo $url?>/ArticleController/insertArticlePage"><button>NOUVEAU</button></a>
<table width="800" border="1">
    <tr>
        <td>Titre</td>
        <td>Resume</td>
        <td>Categorie</td>
        <td>Contenu</td>
    </tr>
    <?php foreach($article as $row){ ?>
    <tr>
        <td><?php echo $row['titre']; ?></td>
        <td><?php echo $row['resume']; ?></td>
        <td><?php echo $row['idcategorie']; ?></td>
        <td><?php echo $row['contenu']; ?></td>
    </tr>
    <?php } ?>
</table>