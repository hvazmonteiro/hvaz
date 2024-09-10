<?php
include('php/protect.php');
include_once('php/conexao.php');
$dataatual = date('y-m-d');
$hora = date('H:i');

//$sql = "SELECT id,datasolicitacao,horasolicitacao,solicitante,paciente,setor,leito,destino,observacao,maqueiro,horaentrega,statusc FROM snd.maqueiros 
//where statusc = 'Pendente' ORDER BY horasolicitacao desc LIMIT 10";

	$sql = "SELECT id,

	DATE_FORMAT(datasolicitacao,'%d/%m/%Y') AS DataFormatada,

	horasolicitacao,solicitante,paciente,setor,leito,destino,observacao,maqueiro,horaentrega,statusc,transporte FROM snd.maqueiros 
		
	where 
		
	statusc <> 'Pendente' ORDER BY horasolicitacao asc LIMIT 10";

    $result = $mysqli->query($sql);

?>

	<style>

        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 20px;
			cellpadding: 20px;
			color: black;
			text-align: center;
			height: 50px;
			width: 300px;
        }

	</style>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="refresh" content="60">
		
		<!-- Title -->
        <title>Painel Maqueiros</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/hvm.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="maqueiros.php">Sistema de solicitação aos maqueiros - HVM</a></li>
							</ul>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="maqueiros.php"><img src="img/logo2.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="maqueiros.php">Menu </a></li>
											<li><a href="atender.php">Chamadas Pendentes </a></li>
											<li class="active"><a href="atender2.php">Chamadas Finalizadas </a></li>
											<li><a href="php/logout.php">Sair</a></li>
										
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<br>
		

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-20">
						<div>
							<h3>Painel de solicitações aos maqueiros - Últimas 10 solicitações finalizadas:</h3><br>

							<table class="tablebg">
								<thead>
									<tr>
									<th scope="col">Data</th>
									<th scope="col">Solicitante</th>
									<th scope="col">Hora</th>
									<th scope="col">Paciente</th>
									<th scope="col">Setor</th>
									<th scope="col">Leito</th>
									<th scope="col">Destino</th>
									<th scope="col">Transporte</th>                
									<th scope="col">Observação</th>
									<th scope="col">Status</th>               
									</tr>
								</thead>
								<tbody>
									<?php
										while($user_data = mysqli_fetch_assoc($result)){
											echo "<tr>";
											echo "<td>" . $user_data['DataFormatada']."</td>";
											echo "<td>" . $user_data['solicitante']."</td>";
											echo "<td>" . $user_data['horasolicitacao']."</td>";
											echo "<td>" . $user_data['paciente']."</td>";
											echo "<td>" . $user_data['setor']."</td>";
											echo "<td>" . $user_data['leito']."</td>";
											echo "<td>" . $user_data['destino']."</td>";
											echo "<td>" . $user_data['transporte']."</td>";
											echo "<td>" . $user_data['observacao']."</td>";
											echo "<td>" . $user_data['statusc']."</td>";           									
											echo "<tr>";
										}
									?>
								</tbody>
						</table>
						</div>
					</div>
				</div>	
		</section>
		<!--/ End Feautes -->
		
		
		
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>