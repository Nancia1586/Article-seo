<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
    $this->load->model('Article');
?>
<a href="<?php echo $url?>/ArticleController/insertArticlePage"><button>NOUVEAU</button></a>
<table width="800" border="1">
    <tr>
        <td>Titre</td>
        <td>Resume</td>
        <td>Categorie</td>
        <td>Contenu</td>
        <td></td>
    </tr>
    <?php foreach($article as $row){ 
        $slug = $this->Article->create_slug($row['titre']);    
    ?>
    <tr>
        <td><?php echo $row['titre']; ?></td>
        <td><?php echo $row['resume']; ?></td>
        <td><?php echo $row['idcategorie']; ?></td>
        <td><?php echo $row['contenu']; ?></td>
        <td>
            <!-- <a href="<?php //echo $url?>/ArticleController/Article/<?php //echo $row['id']; ?>"><button>Voir</button></a>      -->
            <a href="<?php echo $slug?>/article-<?php echo $row['id']; ?>.html"><button>Voir</button></a>
        </td>
    </tr>
    <?php } ?>
</table>