<?php

class classprincipale{
    private $conn;

    public function __construct()
    {
        $host = "localhost";
        $utilisateur = "root";
        $motdepasse = "";
        $db = "boursa";

        $this->conn = mysqli_connect($host,$utilisateur,$motdepasse,$db);

        if(!$this->conn){
            die("eurreur de connection au base de données");
        }
    }

    function connecter($data){
        $admin_email = $data['admin_email'];
        $admin_pass = $data['admin_pass'];


        $query= "SELECT * FROM admins WHERE admin_email='$admin_email' AND admin_pass='$admin_pass'";

        if(mysqli_query($this->conn,$query)){
            $result = mysqli_query($this->conn,$query);
            $admin_info = mysqli_fetch_assoc($result);

            if($admin_info){
                header('location:home.php');
                session_start();
                $_SESSION['id'] = $admin_info['id'];
                $_SESSION['adminEmail'] = $admin_info['admin_email'];
                $_SESSION['adminPass'] = $admin_info['admin_pass'];
            }else{
                $errmsg = "l'email ou le mot de passe est incorrect!";
                return $errmsg;
            }
        }
        
    }

    function deconnecter(){
        unset($_SESSION['id']);
        unset($_SESSION['adminEmail']);
        unset($_SESSION['adminPass']);
        header('location:login.php');
    }

    function ajouter_categorie($data){
        $nom = $data['nom'];
        $des = $data['des'];

        $query = "INSERT INTO categorie(nom,des) VALUE('$nom','$des')";

        if(mysqli_query($this->conn, $query)){
            $message = "la categorie a été ajouté avec succées";
            return $message;
        }else{
            $message = "eurreur d'ajout du categorie";
            return $message;
        }
    }

    function afficher_categorie(){
        $query = "SELECT * FROM categorie";
        if(mysqli_query($this->conn, $query)){
            $return_ctg = mysqli_query($this->conn, $query);
            return $return_ctg;
        }
    }
   

   
    function supprimer_categorie($id){
        $query = "DELETE FROM categorie WHERE id=$id";
        if(mysqli_query($this->conn, $query)){
            $msg = "la categorie a été supprimer avec succées";
            return $msg;
        }
    }
     function prendre_info_categorie($get_id){
        $query = "SELECT * FROM categorie WHERE id=$get_id";
        if(mysqli_query($this->conn, $query)){
            $cat_info = mysqli_query($this->conn, $query);
            $ct_info = mysqli_fetch_assoc($cat_info);
            return $ct_info;
        }
    }

    
    function modifier_categorie($receive_data){
        $nom = $receive_data['nom'];
        $des = $receive_data['des'];
        $id =  $receive_data['id'];
        $query = "UPDATE categorie SET nom='$nom',des='$des' WHERE id=$id";

        if(mysqli_query($this->conn, $query)){
            $return_msg = "la categorie a été modifiés avec succées ";
            return $return_msg;
        }
        

    }

    function ajouter_voiture($data){
        $nom = $data['nom'];
        $prix = $data['prix'];
        $matricule = $data['matricule'];
        $categorie = $data['categorie'];
        $pdt_img_name = $_FILES['pdt_image']['name'];
        $pdt_img_size = $_FILES['pdt_image']['size'];
        $pdt_tmp_name = $_FILES['pdt_image']['tmp_name'];
        $pdt_ext = pathinfo($pdt_img_name, PATHINFO_EXTENSION);


        if($pdt_ext == 'jpg' or $pdt_ext== 'png' or $pdt_ext== 'jpeg'){
            if($pdt_img_size <= 2097152){
                $query= "INSERT INTO voiture(nom,prix,matricule,categorie,img) VALUE('$nom',$prix,'$matricule',$categorie,'$pdt_img_name')";

                if(mysqli_query($this->conn, $query)){
                    move_uploaded_file($pdt_tmp_name,'upload/'.$pdt_img_name);
                    $msg = "la voiture a été ajouté avec succées";
                    return $msg;
                }
            }else{
                $msg = "l'image doit etre inferieur a 2 MB";
            }
        }else{
            $msg = "le type d'image doit etre JPG ou PNG!";
            return $msg;
        }

    }

    function afficher_voiture(){
        $query = "SELECT * FROM voiture";
        if(mysqli_query($this->conn, $query)){
            $voiture = mysqli_query($this->conn, $query);
            return $voiture;
        }
    }

    function supprimer_voiture($voitureid){
        $query = "DELETE FROM voiture WHERE id=$voitureid";
        if(mysqli_query($this->conn, $query)){
            $msg = "voiture supprimer avec succées!";
            return $msg;
        }
    }
    function prendre_info_voiture($id){
        $query = "SELECT * FROM voiture WHERE id=$id";
        if(mysqli_query($this->conn, $query)){
            $voiture_info = mysqli_query($this->conn, $query);
            $voiture_data = mysqli_fetch_assoc($voiture_info);
            return $voiture_data;
        }
    }

    function modifier_voiture($data){
        $id = $data['id'];
       $nom = $data['nom'];
        $prix = $data['prix'];
        $matricule = $data['matricule'];
        $categorie = $data['categorie'];
        

        $pdt_img_name = $_FILES['u_pdt_image']['name'];
        $pdt_img_size = $_FILES['u_pdt_image']['size'];
        $pdt_tmp_name = $_FILES['u_pdt_image']['tmp_name'];
        $pdt_ext = pathinfo($pdt_img_name, PATHINFO_EXTENSION);


        if($pdt_ext == 'jpg' or $pdt_ext== 'png' or $pdt_ext== 'jpeg'){
            if($pdt_img_size <= 2097152){
                $query= "UPDATE voiture SET nom='$nom',prix=$prix,matricule='$matricule',categorie=$categorie,img='$pdt_img_name' WHERE id=$id";

                
        if(mysqli_query($this->conn, $query)){
                    move_uploaded_file($pdt_tmp_name,'upload/'.$pdt_img_name);
                    $msg = "la voiture a été modifier avec succées";
                    return $msg;
                }
            }else{
                $msg = "l'image doit etre inferieur a 2 MB";
            }
        }else{
            $msg = "le type d'image doit etre JPG ou PNG!";
            return $msg;
        }

    }

 
  
      function vendre($data){
        $id = $data['id'];
        $nomclient = $data['nomclient'];
        $nniclient = $data['nniclient'];
        $nomcourtier = $data['nomcourtier'];
        $prcourtier = $data['prcourtier'];
        $matricule = $data['matricule'];
        $prix = $data['prix'];


        $query= "INSERT INTO vendre(id,nomclient,nniclient,nomcourtier,prcourtier,matricule,prix) VALUE('$id','$nomclient','$nniclient','$nomcourtier','$prcourtier','$matricule','$prix')";

        if(mysqli_query($this->conn, $query)){
            $message = "la voiture a été vendu avec succés";
            return $message;
        }else{
            $message = "eurreur";
            return $message;
        }
    }
    function afficher_ventes(){
        $query = "SELECT * FROM vendre";
        if(mysqli_query($this->conn, $query)){
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }
    
    function vendre_by_id($id){
        $query= "SELECT * FROM vendre WHERE id=$id";
        if(mysqli_query($this->conn, $query)){
            $proinfo = mysqli_query($this->conn, $query);
            $ctg = mysqli_fetch_row($proinfo);
            return $ctg;
        }
    }
    
}
?>