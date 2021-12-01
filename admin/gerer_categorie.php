<?php 
include("headerTemplates.php");
    $obj_classprincipale = new classprincipale();
    $ctg_data = $obj_classprincipale->afficher_categorie();

    if(isset($_GET['status'])){
        $get_id = $_GET['id'];

        if($_GET['status']=='delete'){
            $msg = $obj_classprincipale->supprimer_categorie($get_id);
        }
    }

?>

<h2>gérer lesCategories</h2>
<?php if(isset($msg)){
    echo $msg;
} ?>
<table class="table">

    <thead>
        <tr>
            <th>id</th>
            <th>nom du categorie</th>
            <th>Description</th>
            <th>modifier/supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($ctg=mysqli_fetch_assoc($ctg_data)){
        ?>

            <tr>
                <td><?php echo $ctg['id']; ?></td>
                <td><?php echo $ctg['nom']; ?></td>
                <td><?php echo $ctg['des']; ?></td>
                <td>
                    <a href="modifier_categorie.php?status=edit&&id=<?php echo $ctg['id']; ?>">modifier</a>
                    <a href="?status=delete&&id=<?php echo $ctg['id']; ?>">supprimer</a>
                </td>
            </tr>

        <?php
            }
        ?>
    </tbody>

</table>

<?php
include("footerTemplates.php");
?>