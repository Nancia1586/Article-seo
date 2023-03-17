<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<form action="<?php echo $url?>/UtilisateurController/inscription" method="get">
    <input type="text" name="nom">
    <input type="text" name="email">
    <input type="password" name="mdp">
    <input type="submit" value="S'inscrire">
</form>
