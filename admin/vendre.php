<?php 
	include("headerTemplates.php");
    $obj_classprincipale = new classprincipale();
    if(isset($_POST['pdt_btn'])){
        $return_mesg=$obj_classprincipale->vendre($_POST);
    }

?>

<h2>vendre une voiture</h2>
<?php
        if(isset($return_mesg)){
            echo $return_mesg;
        }
    
    ?>

<form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="id">id facture</label>
        <input type="number" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="nomclient">Nom Client</label>
        <input type="text" name="nomclient" class="form-control">
    </div>
    <div class="form-group">
        <label for="nniclient">NNI Client</label>
        <input type="number" name="nniclient" class="form-control">
    </div>
    <div class="form-group">
        <label for="nomcourtier">Nom Courtier</label>
        <input type="text" name="nomcourtier" class="form-control">
        
    </div>
    <div class="form-group">
        <label for="prcourtier">pourcentage Courtier</label>
        <input type="number" name="prcourtier" class="form-control">
        
    </div>
    <div class="form-group">
        <label for="matricul">matricule</label>
        <input type="text" name="matricule" class="form-control">
        
    </div>
    <div class="form-group">
        <label for="prix">prix de vente</label>
        <input type="number" name="prix" class="form-control">
        
    </div>


    <input name="pdt_btn" type="submit" value="vendre ce voiture" class="btn btn-primary btn-block">
    
</form>


<?php
include("footerTemplates.php");

?>