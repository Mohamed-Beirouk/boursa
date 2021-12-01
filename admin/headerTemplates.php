<?php
    include("Class/classprincipale.php");
    session_start();
    $adminID = $_SESSION['id'];
    $adminEmail = $_SESSION['adminEmail'];
    if($adminID== null){
        header('location:index.php');
    }
    if(isset($_GET['deconnecter'])){
        $obj_classprincipale = new classprincipale();
        $obj_classprincipale->deconnecter();
    }

?>

<?php include("includes/head.php"); ?>

<body>

    <body>
        <div class="fixed-button">
            <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> boursa
            </a>
        </div>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <?php include_once("includes/header-nav.php"); ?>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <?php include_once("includes/sidenav.php"); ?>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">

                                        <div class="page-body">