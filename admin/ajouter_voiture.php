<?php

include("headerTemplates.php");


    $obj_classprincipale = new classprincipale();
    $ctg_info = $obj_classprincipale->afficher_categorie();
    if(isset($_POST['pdt_btn'])){
        $return_msg = $obj_classprincipale->ajouter_voiture($_POST);
    }
    
?>

<h2>Ajouter une voiture</h2>
<?php 
    if(isset($return_msg)){
        echo $return_msg;
    }
?>
<form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">nom</label>
        <input type="text" name="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">prix</label>
        <input type="number" name="prix" class="form-control">
    </div>
    <div class="form-group">
        <label for="matricule">matricule</label>
        <input type="text" name="matricule" class="form-control">
    </div>
    <div class="form-group">
        <label for="categorie">categorie</label>
        <select name="categorie" class="form-control">
            <option>veuillez choisir une categorie</option>
            <?php 
                while($ctg= mysqli_fetch_assoc($ctg_info)){
                
            ?>
            <option value="<?php echo $ctg['id']; ?>"><?php echo $ctg['nom']; ?></option>
            <?php } ?>
        </select>
    </div>
    
     <div class="form-group">
        <label for="pdt_image">Image</label>
        <input type="file" name="pdt_image" class="form-control">
    </div>
   
    <input name="pdt_btn" type="submit" value="Ajouter ce voiture" class="btn btn-primary btn-block">
</form>

<?php
include("footerTemplates.php");

?>