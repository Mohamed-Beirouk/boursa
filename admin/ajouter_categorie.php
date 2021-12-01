<?php
include("headerTemplates.php");
    $obj_classprincipale = new classprincipale();
    if(isset($_POST['ctg_btn'])){
        $return_mesg =$obj_classprincipale->ajouter_categorie($_POST);
    }

?>


<h1>Ajouter une categorie</h1><br>

<form action="" method="post">
    <div class="form-group">
        <label for="ctg_name">nom categorie</label>
        <input type="text" name="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="ctg_des">la Description</label>
        <input type="text" name="des" class="form-control">
    </div>
    
    <input type="submit" value="ajouter la categorie" name="ctg_btn" class="btn btn-primary">
    <?php
        if(isset($return_mesg)){
            echo $return_mesg;
        }
    
    ?>
</form>


<?php
include("footerTemplates.php");
?>
