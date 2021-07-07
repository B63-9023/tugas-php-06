<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas PHP 6 - Niomic</title>
	<style>
		table {
			border-style: dashed none dashed none;
			width: 500px;
		}
	</style>
</head>
<body>
	<!-- TUGAS PAGE 1 -->
	<?php 
		$habib = "21";
		$habib_aji = "4";
		$aji_bintan = "3";

	 ?>
	<table>
		<tr>
			<td>Usia Habib = <?php echo $habib ?></td>
		</tr>
		<tr>
			<td>Usia Aji = <?php echo $habib + $habib_aji ?></td>
		</tr>
		<tr>
			<td>Usia Bintan = <?php echo $habib + $habib_aji + $aji_bintan ?></td>
		</tr>
	</table>
	<br><br><br><br>
	<!-- TUGAS PAGE 2 -->
	<?php 
		$jambu = 15000;
		$jambu_dus = 6;
		$kg_dus = 5;
		$dus = 2000;
		$per_dus = $jambu * $kg_dus + $dus;
	 ?>
	<table>
		<tr>
			<td>Harga Jambu = Rp. 15000 / Kg</td>
		</tr>
		<tr>
			<td>Harga Kardus = Rp. 2000 / Pcs</td>
		</tr>
		<tr>
			<td>Total Penjualan (Dus dan Jambu) = Rp. <?php echo $jambu_dus * $per_dus ?></td>
		</tr>
	</table>
</body>
</html>


