<?php
include('db.php');

$id = $_GET['id'];
 
$query = mysql_query("select * from data where id='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);

?>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="surat.css" rel="stylesheet" type="text/css" media="screen" />
<title>Print Data</title>
<body>
<div id="surat">
<div id="print-area-2">
<div><center><img src="img/logo.jpg" width="205px" height="150px"></center></div>
<div class="nama_surat"><center><h3>Bukti Pemesanan</h3></center></div>

<br>
<div id="content_surat">

<table>
	<tr>
		<td>
			<div>
				<label class="l_form">Nama Pemesan</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="nama" value="<?php echo $data['nama'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">Tanggal Booking</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="jadwal" value="<?php echo $data['jadwal'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">Nama Mobil</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="nm_mobil" value="<?php echo $data['nm_mobil'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">No. Polisi</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="no_polisi" value="<?php echo $data['no_polisi'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">Jenis Kerusakan</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="jns_kerusakan" value="<?php echo $data['jns_kerusakan'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">Estimasi</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="estimasi" value="<?php echo $data['estimasi'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td></td>
	</tr>
	<tr>
		<td>
			<div>
				<label class="l_form">Biaya</label>
			</div>
		</td>
		<td> : </td>
		<td><input type ="text" name="biaya" value="<?php echo $data['biaya'];?>" style="outline:none; border:1px; background:transparent; border-bottom:1px rgba(0,0,150,2) solid; width:400px;" readonly></td>
	</tr>
	</table>
</div>
</div>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<a class="no-print btn btn-sm btn-warning" href="javascript:printDiv('print-area-2');" ><i class="glyphicon glyphicon-print"></i> Print</a>
</div>

<script type="text/javascript">     
    
	function printDiv(elementId) {
    var a = document.getElementById('print-area-2').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
</body>