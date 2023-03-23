<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exemple CkEditor</title>    
    <script src="<?php echo base_url('ckeditor/ckeditor.js'); ?>"></script>
</head>
<body>
<form action="<?php echo $url?>/ArticleController/insertArticle" method="get">
    <h4>Titre: </h4><input type="text" name="titre" placeholder="Titre">
    <h4>Resume: </h4><textarea name="resume"></textarea>
    <h4>Categorie: </h4>
    <select name="categorie">
        <?php foreach($categorie as $row){ ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
        <?php } ?>
    </select>
    <h4>Contenu: </h4>
    <textarea cols="80" class="ckeditor" id="editeur" name="contenu" rows="10"></textarea>
    <br/>
    <input type="submit" value="AJOUTER"> 
</form>
</body>
</html>
 
