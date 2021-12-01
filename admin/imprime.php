<?php
    include("headerTemplates.php");
	$id = $_GET['id'];
    $obj_classprincipale = new classprincipale();
    $vendre = $obj_classprincipale->vendre_by_id($id);

?>

<div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>boursa@gmail.com</a></li>
                        <li><a href="#">tous vos besoins sont ici</a></li>
                    </ul>
                </div>
               
            </div>
</div>


<head>
    
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0\css\font-awesome.min.css">
	<center>
        <img src="assets/images/logoboursa.jpg" align=left height="220" width="200">
    </center>
    
    <center>
        <img src="assets/images/contract.png" align=right height="220" width="200">
    </center>
    
    
    <center>
    	<button class="btn btn-primary" onclick="prim()"> <h1> <center>Gestion de Boursa</center></h1></button>
    </center>

</head>
<script type="text/javascript">
	function prim() {
		// console.log("test");
		window.print();
	}
</script>
<body>
	<center>
        <p>
            Nom Client : <?php echo $vendre[1];?><br>
            Nom Courtier : <?php echo $vendre[2];?><br>
            Prix : <?php echo $vendre[6];?><br>
            Prix Courtieu : <?php echo $vendre[6]*($vendre[4]/100);?><br>
        </p>
    </center>

	
</body>

<?php
include("footerTemplates.php");

?>