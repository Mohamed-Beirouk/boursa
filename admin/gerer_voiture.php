<?php
include("headerTemplates.php");

    $obj_classprincipale = new classprincipale();
    $voiture_info = $obj_classprincipale->afficher_voiture();

    if(isset($_GET['prostatus'])){
        $voitureid = $_GET['id'];
        if($_GET['prostatus']=='delete'){
            $msg = $obj_classprincipale->supprimer_voiture($voitureid);
        }
    }

?>

<h2>Gérer les voitures</h2>
<?php 
    if(isset($msg)){
        echo $msg;
    }
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>prix</th>
            <th>matricule</th>
            <th>Image</th>
            <th>Categorie</th>
            <th>modifier / supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php while($voiture = mysqli_fetch_assoc($voiture_info)){

         ?>
        <tr>
            <td><?php echo $voiture['id']; ?></td>
            <td><?php echo $voiture['nom']; ?></td>
            <td><?php echo $voiture['prix']; ?></td>
            <td><?php echo $voiture['matricule']; ?></td>

            <td><img style="height: 50px;" src="upload/<?php echo $voiture['img']; ?>"></td>
            <td><?php echo $voiture['categorie']; ?></td>
           
            <td>
            <a href="modifier_voiture.php?prostatus=edit&&id=<?php echo $voiture['id']; ?>">modifier</a>
            <br>
                <a href="?prostatus=delete&&id=<?php echo $voiture['id']; ?>">supprimer</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

</table>
<?php
include("footerTemplates.php");
?>