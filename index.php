<?php
    include('admin/Class/classprincipale.php');
    $objclassprincipale = new classprincipale();

   
    $voiture=$objclassprincipale->afficher_voiture();
    $voitureData = array();
    while($data=mysqli_fetch_assoc($voiture)){
        $voitureData[]= $data;
    }
?>

<?php include_once('includes/head.php'); ?>

<body class="biolife-body">

    <header id="header" class="header-area style-01 layout-03">
        <?php include_once('includes/header_top.php'); ?>
        <?php include_once('includes/header_middle.php'); ?>
        <?php include_once('includes/header_bottom.php'); ?>
    </header>


    
    <div class="page-contain">

        <div id="main-content" class="main-content  col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="product-category grid-style">


                <div class="row">
                    <ul class="products-list">
                    <?php foreach($voitureData as $voiture){ ?>
                        <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                        <img src="admin/upload/<?php echo $voiture['img']; ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    
                                    <div class="prix">
                                        <ins><span class="price-amount"><?php echo $voiture['nom']; ?></span></ins>
                                    </div>
                                    <div class="price">
                                        <ins><span class="price-amount"><?php echo $voiture['matricule']; ?></span></ins>
                                    </div>
                                    <div class="price">
                                        <ins><span class="price-amount"><?php echo $voiture['prix']; ?><span class="currencySymbol">MRO</span></span></ins>
                                    </div>
                                    

                                    <div class="shipping-info">
                                        <p class="shipping-day">veuilez nous visiter por l'achat</p>
                                        <p class="for-today">37419845 ou 25552233</p>
                                    </div>

                                </div>
                            </div>
                        </li><br>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>




    <?php include_once('includes/scripts.php'); ?>

</body>

</html>