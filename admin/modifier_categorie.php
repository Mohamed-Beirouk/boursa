<?php
include("headerTemplates.php");
$obj_classprincipale = new classprincipale();
if(isset($_GET['status'])){
    $get_id = $_GET['id'];
    if($_GET['status']=='edit'){
        $return_data = $obj_classprincipale->prendre_info_categorie($get_id);
    }
}
if(isset($_POST['u_ctg_btn'])){
    $return_msg = $obj_classprincipale->modifier_categorie($_POST);
}


?>

<form action="" method="post">
<?php
if(isset($return_msg)){
    echo $return_msg;
}
?>

<div class="form-group">
        <input hidden type="text" name="id" class="form-control" value="<?php echo $return_data['id']; ?>">
    </div>

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" value="<?php echo $return_data['nom']; ?>">
    </div>
    <div class="form-group">
        <label for="des">Description</label>
        <input type="text" name="des" class="form-control" value="<?php echo $return_data['des']; ?>">
    </div>
    <input type="submit" value="modifier la categorie" name="u_ctg_btn" class="btn btn-primary">

</form>

<?php
include("footerTemplates.php");
?>