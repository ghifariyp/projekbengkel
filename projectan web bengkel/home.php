<?php session_start();
if(ISSET($_SESSION['username'])){
include "db.php"; 
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Home</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->
<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <img src="img/logo.jpg" width="225px" height="170px">

            <hr>

            <ul class="nav nav-stacked">
			   	<li><a href="home.php"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                <li><a href="data.php"><i class="glyphicon glyphicon-file"></i> Booking</a></li>
				<li><a href="jadwal.php"><i class="glyphicon glyphicon-user"></i> Daftar Booking</a></li>
				<li><a href="logout.php"><i class="glyphicon glyphicon-user"></i> Logout</a></li>            
            </ul>
           
            <hr>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
             <hr>

            <div class="row">
                <!-- center left-->
                <div class="col-md-10">
                    
                    <!--/panel-->

                    <!--tabs-->
                    <div class="panel">
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
                               <h3><b> Selamat datang di Website Bengkel Mobil Asido</b></h3>
								   <p> Bengkel Mobil Asido ini berdiri pada tahun 1996 yang mana Lahan & Bangunannya adalah sebuah Bengkel mobil juga yang dulunya bernama Bangun Jaya Service.</p>
								   <p> Pemilik Bengkel Mobil Asido yaitu Bapak Ir.Patar Hutauruk, beliau adalah seorang mantan personil dari Senior Manager Sevices di Astra Mobil Isuzu Division.</p>
								   <p> Kondisi Bengkel Mobil Asido sudah mapan untuk menangani berbagai macam kondisi Service Perbaikan Mobil,dimana kami mempunyai 9 Stall yg terdiri dari 7 Stall untuk Service, 1 Stall untuk Lubbing & 1 Stall untuk Car Lift. Kegiatan Service Mobil yang sudah biasa kami kerjakan adalah : </p>
								   <p> 	Ganti Oli </p>
								   <p> 	Bongkar Pasang Kopling </p>
								   <p> 	Engine Over Hole </p>
								   <p> 	Air Condition </p>
								   <p> 	Radiator Dinamo </p>
								   <p> 	Electrical </p>
								   <p> 	Dan Service Mobil Lainnya </p>
								   <p> Didalam penanganan untuk kerjasama dengan pihak Perusahaan kami biasanya memberikan fasilitas layanan Jemput & Antar untuk kendaraan operasional serta jangka waktu pembayaran yang biasanya berjangka waktu sampai 2 minggu untuk setiap penagihan kwitansi service. </p>
								   <p> <img src="img/1.jpg" width="235px" height="175px">
									   <img src="img/2.jpg" width="235px" height="175px">
									   <img src="img/3.jpg" width="235px" height="175px"></p>
								   <p> Kami tunggu kedatangan anda untuk menikmati Service kendaran mobil di Bengkel Mobil Asido yang <b>”Melayani Lebih Sungguh“.</b></p>
							</div>
                        </div>
                    </div>
                
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
</body>
</html>

<?php 
}else{ 
?>Anda harus login. Klik <a href="index.html"> disini</a><?php 
} 
?>