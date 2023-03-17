<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<form action="<?php echo $url?>/UtilisateurController/login" method="get">
    <input type="text" name="email">
    <input type="password" name="mdp">
    <input type="submit" value="Valider">
</form>
<a href="<?php echo $url?>/UtilisateurController/inscriptionPage">S'inscrire</a>
<?php if(isset($erreur)){ ?>
    <p style="color:red;"><?php echo $erreur; ?></p>
<?php } ?>