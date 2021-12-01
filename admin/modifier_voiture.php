<?php 
    include("headerTemplates.php");
    $obj_classprincipale = new classprincipale();
    $ctg_info = $obj_classprincipale->afficher_categorie();
    if(isset($_GET['prostatus'])){
        $id = $_GET['id'];
        if($_GET['prostatus']=='edit'){
            $voiture_Info = $obj_classprincipale->prendre_info_voiture($id);
        }
    }
    if(isset($_POST['u_pdt_btn'])){
        $update_msg = $obj_classprincipale->modifier_voiture($_POST);
    }

?>
<?php if(isset($update_msg)){
    echo $update_msg;
} ?>
<form class="form" action="" method="post" enctype="multipart/form-data">
<div class="form-group">
        <input hidden type="text" name="id" class="form-control" value="<?php echo $voiture_Info['id']; ?>">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" value="<?php echo $voiture_Info['nom']; ?>">
    </div>
    <div class="form-group">
        <label for="prix">prix</label>
        <input type="number" name="prix" class="form-control" value="<?php echo $voiture_Info['prix']; ?>">
    </div>
    <div class="form-group">
        <label for="matricule">matricule</label>
        <input type="text" class="form-control" name="matricule" value="<?php echo $voiture_Info['matricule']; ?>">
    </div>
    <div class="form-group">
        <label for="categorie">Category</label>
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
        <label for="u_pdt_image">Image</label>
        <input type="file" name="u_pdt_image" class="form-control">
    </div>
    
    <input name="u_pdt_btn" type="submit" value="modifier la voiture" class="btn btn-primary btn-block">
</form>

<?php
include("footerTemplates.php");
?>