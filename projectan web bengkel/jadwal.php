<?php session_start();
if(ISSET($_SESSION['username'])){
include "db.php"; 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Data Booking</title>
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
        <div class="col-sm-2">
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
                <div class="col-md-12	">
                    
                    <!--/panel-->

                    <!--tabs-->
                    <div class="panel">
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
                               <h3><b> Daftar Booking Bengkel Mobil Asido</b></h3>						   
							</div>
                        </div>
                    </div>
			<strong><h4>Data Booking Service</h4></strong>

            <hr>

            <div class="row">
                <div class="col-md-15">
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Pemesan</th>
								<th>Tanggal Booking</th>
								<th>Nama Mobil</th>
								<th>No. Polisi</th>
								<th>Jenis Kerusakan</th>
								<th>Estimasi</th>
								<th>Biaya</th>
								<th>Aksi</th>
							</tr>
						</thead>	
<?php
    $query = mysql_query("select * from data");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
?>
	
	<tr>
		<td><?php echo $no; ?></td>
        <td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['jadwal']; ?></td>
		<td><?php echo $data['nm_mobil']; ?></td>
		<td><?php echo $data['no_polisi']; ?></td>
		<td><?php echo $data['jns_kerusakan']; ?></td>
		<td><?php echo $data['estimasi']; ?></td>
		<td><?php echo $data['biaya']; ?></td>
		<td width="10%"><a href="print.php?id=<?php echo $data['id'] ?>" ><i class="glyphicon glyphicon-print"></i>Print</a></td>
	</tr>	
	<?php
        $no++;
			}
	?>

					</table>
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