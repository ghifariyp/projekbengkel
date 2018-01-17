<?php session_start();
if(ISSET($_SESSION['username'])){
include "db.php"; 
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Form Data Barang</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
<script>
function tampilkan (){
var id_kerusakan=document.getElementById("Form1").kategori.value;
	if (id_kerusakan == "Service Rutin"){
	document.getElementById("estimasi").value= "2 Jam";
	document.getElementById("biaya").value = "Rp. 150.000";
	}
	else if (id_kerusakan == "Kerusakan Mesin"){
	document.getElementById("estimasi").value = "1 Hari";
	document.getElementById("biaya").value = "Rp. 250.000";
	}
	else if (id_kerusakan == "Penggantian Transmisi"){
	document.getElementById("estimasi").value = "1 Hari";
	document.getElementById("biaya").value = "Rp. 550.000";
	}
	else if (id_kerusakan == "Head Gasket"){
	document.getElementById("estimasi").value = "1 Hari";
	document.getElementById("biaya").value = "Rp. 450.000";
	}
	else if (id_kerusakan == "Kompresor AC"){
	document.getElementById("estimasi").value = "1 Hari";
	document.getElementById("biaya").value = "Rp. 750.000";
	}
}
</script>

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
                <div class="col-md-8">
                    
                    <!--/panel-->

                    <!--tabs-->
                    <div class="panel">
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
                               <h4> <b>Form Booking Service</b> </h4>
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>
		<div class="panel-body">
		<form class="form-horizontal" action="insert.php" method="post" id="Form1" name="Form1">
			<div class="form-group">
			<label class="col-sm-3 control-label">Nama Pemesan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nama">
				</div>	
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">Pilih Jadwal Kedatangan</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" name="jadwal">
				</div>	
			</div>
			<div class="form-group">
		    <label class="col-sm-3 control-label">Nama Mobil</label>
			    <div class="col-sm-4">
					<input type="text" class="form-control" name="nm_mobil">
			    </div>
			</div>
			<div class="form-group">
		    <label class="col-sm-3 control-label">Nomor Polisi</label>
			    <div class="col-sm-4">
					<input type="text" class="form-control" name="no_pol">
			   </div>
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">Jenis Kerusakan</label>
				<div class="col-sm-4">
				<select id="kategori" name="jns_kerusakan" onchange="tampilkan()" class="form-control">
					<option value="" hidden>Pilih</option>
					<option value="Service Rutin">Service Rutin</option>
					<option value="Kerusakan Mesin">Kerusakan Mesin</option>
					<option value="Penggantian Transmisi">Penggantian Transmisi</option>
					<option value="Head Gasket">Head Gasket</option>
					<option value="Kompresor AC">Kompresor AC</option>
				</select>
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">Estimasi</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="estimasi" id="estimasi" readonly>
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">Biaya</label>
				<div class="col-sm-4">
					<input type="text" name="biaya" class="form-control" id="biaya" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" name="submit" value="Input" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>

        </div>
        <!--/col-span-9-->
    </div>
</div>
</body>
</html>

<?php 
}else{ 
?>Anda harus login. Klik <a href="index.html"> disini</a><?php 
} 
?>