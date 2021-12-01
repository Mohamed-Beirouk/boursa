<?php 
	include("headerTemplates.php");
    $obj_classprincipale = new classprincipale();
    $voiture_info = $obj_classprincipale->afficher_ventes();

    
?>

<h2>Gérer les ventes</h2>
<?php 
    if(isset($msg)){
        echo $msg;
    }
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>nom client</th>
            <th>NNI client</th>
            <th>Nom courtier</th>
            <th>pourcentage courtier</th>
            <th>matricule</th>
            <th>prix</th>
            <th>Imprimer Facture</th>
        </tr>
    </thead>
    <tbody>
        <?php while($voiture = mysqli_fetch_assoc($voiture_info)){

         ?>
        <tr>
            <td><?php echo $voiture['id']; ?></td>
            <td><?php echo $voiture['nomclient']; ?></td>
            <td><?php echo $voiture['nniclient']; ?></td>
            <td><?php echo $voiture['nomcourtier']; ?></td>
            <td><?php echo $voiture['prcourtier']; ?></td>
            <td><?php echo $voiture['matricule']; ?></td>
            <td><?php echo $voiture['prix']; ?></td>
            
            <td>
            <a href="imprime.php?id=<?php echo $voiture['id']; ?>">imprimer</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

</table>


<?php
include("footerTemplates.php");

?>