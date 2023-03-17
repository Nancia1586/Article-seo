<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <script type="text/javascript">

        function checkFournisseur(fournisseur){
            //création de l'objet XMLHttpRequest
            var xhr; 
            try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
            catch (e) 
            {
                try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
                catch (e2) 
                {
                   try {  xhr = new XMLHttpRequest();  }
                   catch (e3) {  xhr = false;   }
                 }
            }
          
            //Définition des changements d'états    
            xhr.onreadystatechange  = function() 
            { 
               if(xhr.readyState  == 4){
                    if(xhr.status  == 200) {
                        window.location.href = "<?php echo $url?>/Proforma/demandeForm";
                    } else {
                        alert("erreur");
                        document.region="Error code " + xhr.status;
                    }
                }
            }; 
            var lieulivraison = document.getElementById("lieulivraison");
            var delaipaiement = document.getElementById("delaipaiement");
            var dataurl = "idFournisseur="+fournisseur+"&lieulivraison="+lieulivraison.value+"&delaipaiement="+delaipaiement.value;
            xhr.open("GET", "<?php echo $url?>/Proforma/demandeProforma?"+dataurl, true); 
           
            //XMLHttpRequest.send(body)
            xhr.send(null); 
        }
    </script>
</head>
<body>
    <div style="margin-top: 2%;" class="col-md-3">
            <a class="btn blue btn-primary" style="text-decoration-line: none; width: 50%;"
               href="<?php echo $url?>/Proforma/faireDemandeProforma">Retour</a></p>
     </div>
     <h2>Demande de proforma</h2>
     <hr>
    <h3>Liste des fournisseurs choisis</h3>
        <h4>Nombre: <?php echo $nombre; ?></h4>
        <table class="table table-striped">
            <tr style="background-color: #E4ECFF">
               <th>Nom</th>
               <th>Adresse</th>
               <th></th> 
            </tr>
            <?php foreach($choisi as $row){ ?>
            <tr>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['adresse']; ?></td>
                <td>
                    <form action="<?php echo $url?>/Proforma/annulationChoix" method="get">
                        <input type="hidden" name="fournisseurId" value="<?php echo $row['fournisseurid']; ?>">
                        <input type="hidden" name="iddemandeproforma" value="<?php echo $row['iddemandeproforma']; ?>">
                        <input type="submit" value="Annuler">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>

        <?php if($nombre >= 3){ ?>
        <form action="<?php echo $url?>/Proforma/validerDemande" method="post">
            <input type="submit" value="Valider">
        </form>
        <?php } ?>
    <tr/>
    <hr>
    <h3>Liste de tous les fournisseurs</h3>
        <form action="<?php echo $url?>/Proforma/filtrer" method="get">
            <input type="text" name="filtre">
            <input type="submit" value="Filtrer">
        </form>
        <br/>
        <table width="800" border="1">
            <tr>
                <th></th> 
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
            <?php if(isset($filtre)){ ?>
                <?php foreach($filtre as $row){ ?>
                <tr>
                    <td>
                        <input type="checkbox" onclick="checkFournisseur(<?php echo $row['idfournisseur']; ?>)">
                        <input type="hidden" id="lieulivraison" value="<?php echo $_SESSION['lieulivraison']; ?>">
                        <input type="hidden" id="delaipaiement" value="<?php echo $_SESSION['delaipaiement']; ?>">
                    </td>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['adresse']; ?></td>
                </tr>
                <?php } ?>
            <?php }
            else{ ?>
                <?php foreach($nonchoisi as $row){ ?>
                <tr>
                    <td>
                        <input type="checkbox" onclick="checkFournisseur(<?php echo $row['idfournisseur']; ?>)">
                        <input type="hidden" id="lieulivraison" value="<?php echo $_SESSION['lieulivraison']; ?>">
                        <input type="hidden" id="delaipaiement" value="<?php echo $_SESSION['delaipaiement']; ?>">
                    </td>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['adresse']; ?></td>
                </tr>
                <?php } ?>
            <?php } ?>
        </table>
        <br>
        <br>
        <br>
</body>
</html>