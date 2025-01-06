<style type="text/css">
@page {
	margin-top: 0.5cm;
	margin-bottom: 0.5cm;
    margin-left: 1cm;
    margin-right: 1cm;
}
.font{
	font-family: verdana,arial,sans-serif,tahoma;
	font-size:14px;
}
.fontheader{
	font-family: verdana,arial,sans-serif;
	font-size:14px;
}

table.gridtable2 {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: thin;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable2 th {
	border-width: 1px;
	padding: 10px;
	border-style: solid;
	background-color: #ffffff;
	font-family:tahoma;
	font-size:11px;
}
table.gridtable2 td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
	font-family: verdana,arial,sans-serif;
	font-size:10px;
}

#kiri
{
	width:50%;
float:left;
}
#kanan
{
	width:50%;
float:right;
}
</style>
<table width="100%">
<?php
								//
												if($data_bulan_post > 0){
														$nm_bln = $data_bulan_post;
														if($nm_bln == 1){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br>Periode : Januari ".$data_tahun_post."</center></th></tr>";															
														}elseif($nm_bln == 2){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Februari ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 3){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Maret ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 4){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : April ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 5){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Mei ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 6){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Juni ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 7){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Juli ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 8){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Agustus ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 9){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : September ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 10){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Oktober ".$data_tahun_post."</center></th></tr>";
														}elseif($nm_bln == 11){
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : November ".$data_tahun_post."</center></th></tr>";
														}else{
															echo "<tr><th colspan='7' style='text-align:center;font-size:15px;'><center>LAPORAN KONSOLIDASI NERACA<br><br>Periode : Desember ".$data_tahun_post."</center></th></tr>";
														}														
												}
											?>
					<br>
					<br>
					</table>
					<div id="kiri">

<table class="gridtable2" width="100%">

<tr>
	<td><center><b>Kode</b></center></td>
	<td><center><b>Keterangan</b></center></td>
	<td><center><b>Jumlah (Rp)</b></center></td>
	<td></td>
									
</tr>

<!-- HARTA LANCAR -->
<tr>
	<td><b>11</b></td>
	<td><b>HARTA LANCAR</b></td>
	<td></td>
	<td></td>
	
</tr>

<?php
	if($data_HartaLancar1101 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1101 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1101;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1101					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1101,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1102 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1102 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1102;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1102					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1102,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1104 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1104 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1104;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1104					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1104,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1105 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1105 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1105;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1105					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1105,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1106 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1106 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1106;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1106					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1106,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1107 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1107 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1107;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1107					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;	
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1107,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1108 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1108 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1108;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1108					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;		
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1108,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1110 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1110 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1110;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1110					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;	
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1110,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	if($data_HartaLancar1111 > 0){
		$SubTotal_HartaLancar=0;
	
		foreach($data_HartaLancar1111 as $row){

			$nokir_HartaLancar			= $row->no_perkiraan;
			$nm_perkiraan_HartaLancar	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = ($row->saldoawal) * $vFaktor;
			$vSaldoAwal = $row->saldoawal1111;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;
			
			$jml_HartaLancar1111					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;							
		
			$SubTotal_HartaLancar 	=  $jml_HartaLancar1101 + $jml_HartaLancar1102 + $jml_HartaLancar1104 + $jml_HartaLancar1105 + $jml_HartaLancar1106 + $jml_HartaLancar1107 + $jml_HartaLancar1108 + $jml_HartaLancar1110 + $jml_HartaLancar1111;
			

			$rp_SubTotal_HartaLancar			= number_format($SubTotal_HartaLancar,0,',','.');
			
?>
<tr>
<td><?=$nokir_HartaLancar?></td>
<td><?=$nm_perkiraan_HartaLancar?></td>
<td align="right"><?=$rp_jml_HartaLancar		= number_format($jml_HartaLancar1111,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>

<tr>
<td></td>
<td><b>Sub Total HARTA LANCAR</b></td>
<td align="right"><b><?=$rp_SubTotal_HartaLancar?></b></td>
<td></td>							
</tr>

<tr>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<!-- AKTIVA TETAP -->
<tr>
	<td><b>13</b></td>
	<td><b>AKTIVA TETAP</b></td>
	<td></td>
	<td></td>
</tr>

<?php
	
	if($data_AktivaTetap1301 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1301 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1301;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1301					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1301,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1302 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1302 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1302;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1302					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1302,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1303 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1303 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1303;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1303					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1303,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1304 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1304 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1304;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1304					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1304,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1305 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1305 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1305;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1305					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1305,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1306 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1306 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1306;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1306					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1306,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1307 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1307 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1307;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1307					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1307,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php
	
	if($data_AktivaTetap1309 > 0){
		$SubTotal_AktivaTetap=0;
	

		foreach($data_AktivaTetap1309 as $row){

			$nokir_AktivaTetap				= $row->no_perkiraan;
			$nm_perkiraan_AktivaTetap	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal1309;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;

			$jml_AktivaTetap1309					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;								
		
			$SubTotal_AktivaTetap 	=  $jml_AktivaTetap1301 + $jml_AktivaTetap1302 + $jml_AktivaTetap1303 + $jml_AktivaTetap1304 + $jml_AktivaTetap1305 + $jml_AktivaTetap1306 + $jml_AktivaTetap1307 + $jml_AktivaTetap1309;
			

			$rp_SubTotal_AktivaTetap			= number_format($SubTotal_AktivaTetap,0,',','.');
			
?>
<tr>
<td><?=$nokir_AktivaTetap?></td>
<td><?=$nm_perkiraan_AktivaTetap?></td>
<td align="right"><?=$rp_jml_AktivaTetap		= number_format($jml_AktivaTetap1309,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>

<tr>

<td></td>
<td><b>Sub Total AKTIVA TETAP</b></td>
<td align="right"><b><?=$rp_SubTotal_AktivaTetap?></b></td>
<td></td>

</tr>

<tr>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<!-- AKTIVA LAIN-LAIN -->
<tr>
	<td><b>19</b></td>
	<td><b>AKTIVA LAIN-LAIN</b></td>
	<td></td>
	<td></td>
</tr>

<?php
	
	if($data_AktivaLain > 0){
		$SubTotal_AktivaLain=0;
	

		foreach($data_AktivaLain as $row){

			$nokir_AktivaLain				= $row->no_perkiraan;
			$nm_perkiraan_AktivaLain	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal19;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_AktivaLain					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;								
		
			$SubTotal_AktivaLain 	+=  $jml_AktivaLain;
			

			$rp_SubTotal_AktivaLain			= number_format($SubTotal_AktivaLain,0,',','.');
			
?>
<tr>
<td><?=$nokir_AktivaLain?></td>
<td><?=$nm_perkiraan_AktivaLain?></td>
<td align="right"><?=$rp_jml_AktivaLain		= number_format($jml_AktivaLain,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>

<tr>

<td></td>
<td><b>Sub Total AKTIVA LAIN-LAIN</b></td>
<td align="right"><b><?=$rp_SubTotal_AktivaLain?></b></td>
<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td align="center"><b>TOTAL ASSETS</b></td>
	<?php
		$TotalAssets 			= $SubTotal_HartaLancar + $SubTotal_AktivaTetap + $SubTotal_AktivaLain;
		$rp_TotalAssets		= number_format($TotalAssets,0,',','.');
	?>
	<td align="right"><b><?=$rp_TotalAssets?></b></td>
	<td></td>		
</tr>


</tbody>

</table>
</div>

<div id="kanan">

<table class="gridtable2" width="100%">

<tbody>

<tr>
	<td><center><b>Kode</b></center></td>
	<td><center><b>Keterangan</b></center></td>
	<td><center><b>Jumlah (Rp)</b></center></td>
	<td></td>
							
</tr>

<!-- HUTANG -->
<tr>
	
	<td><b>21</b></td>
	<td><b>HUTANG</b></td>
	<td></td>
	<td></td>

</tr>

<?php								
	if($data_Hutang2101 > 0){
		$SubTotal_Hutang=0;								

		foreach($data_Hutang2101 as $row){

			$nokir_Hutang				= $row->no_perkiraan;
			$nm_perkiraan_Hutang	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal2101;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Hutang2101					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_Hutang?></td>
<td><?=$nm_perkiraan_Hutang?></td>
<td align="right"><?=$rp_jml_Hutang		= number_format($jml_Hutang2101,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php								
	if($data_Hutang2102 > 0){
		$SubTotal_Hutang=0;								

		foreach($data_Hutang2102 as $row){

			$nokir_Hutang				= $row->no_perkiraan;
			$nm_perkiraan_Hutang	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal2102;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Hutang2102					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_Hutang?></td>
<td><?=$nm_perkiraan_Hutang?></td>
<td align="right"><?=$rp_jml_Hutang		= number_format($jml_Hutang2102,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php								
	if($data_Hutang2107 > 0){
		$SubTotal_Hutang=0;								

		foreach($data_Hutang2107 as $row){

			$nokir_Hutang				= $row->no_perkiraan;
			$nm_perkiraan_Hutang	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal2107;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Hutang2107					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_Hutang?></td>
<td><?=$nm_perkiraan_Hutang?></td>
<td align="right"><?=$rp_jml_Hutang		= number_format($jml_Hutang2107,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php								
	if($data_Hutang2108 > 0){
		$SubTotal_Hutang=0;								

		foreach($data_Hutang2108 as $row){

			$nokir_Hutang				= $row->no_perkiraan;
			$nm_perkiraan_Hutang	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal2108;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Hutang2108					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;

			$SubTotal_Hutang 	=  $jml_Hutang2101 + $jml_Hutang2102 + $jml_Hutang2107 + $jml_Hutang2108;						

			$rp_SubTotal_Hutang			= number_format($SubTotal_Hutang,0,',','.');
?>
<tr>
<td><?=$nokir_Hutang?></td>
<td><?=$nm_perkiraan_Hutang?></td>
<td align="right"><?=$rp_jml_Hutang		= number_format($jml_Hutang2108,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>

<tr>

<td></td>
<td><b>Sub Total HUTANG</b></td>
<td align="right"><b><?=$rp_SubTotal_Hutang?></b></td>
<td></td>
</tr>

<tr>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<!-- MODAL -->
<tr>
	
	<td><b>32</b></td>
	<td><b>MODAL</b></td>
	<td></td>
	<td></td>
</tr>

<?php
	
	if($data_Modal > 0){
		$SubTotal_Modal=0;
	

		foreach($data_Modal as $row){

			$nokir_Modal				= $row->no_perkiraan;
			$nm_perkiraan_Modal	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal32;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Modal					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;								
		
			$SubTotal_Modal 	+=  $jml_Modal;
			

			$rp_SubTotal_Modal			= number_format($SubTotal_Modal,0,',','.');
			
?>
<tr>
<td><?=$nokir_Modal?></td>
<td><?=$nm_perkiraan_Modal?></td>
<td align="right"><?=$rp_jml_Modal		= number_format($jml_Modal,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>

<tr>

<td></td>
<td><b>Sub Total MODAL</b></td>
<td align="right"><b><?=$rp_SubTotal_Modal?></b></td>
<td></td>
</tr>

<tr>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<!-- LABA -->
<tr>
	
	<td><b>39</b></td>
	<td><b>LABA</b></td>
	<td></td>
	<td></td>
</tr>

<?php								
	if($data_Laba3901 > 0){
		$SubTotal_Laba=0;								

		foreach($data_Laba3901 as $row){
			$nokir_Laba				= $row->no_perkiraan;
			$nm_perkiraan_Laba	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal3901;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Laba3901					= ($vDebet - $vKredit);	
			// $jml_Laba					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_Laba?></td>
<td><?=$nm_perkiraan_Laba?></td>
<td align="right"><?=$rp_jml_Laba		= number_format($jml_Laba3901,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php								
	if($data_Laba3902 > 0){
		$SubTotal_Laba=0;								

		foreach($data_Laba3902 as $row){
			$nokir_Laba				= $row->no_perkiraan;
			$nm_perkiraan_Laba	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal3902;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Laba3902					= ($vDebet - $vKredit);	
			// $jml_Laba					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;
?>
<tr>
<td><?=$nokir_Laba?></td>
<td><?=$nm_perkiraan_Laba?></td>
<td align="right"><?=$rp_jml_Laba		= number_format($jml_Laba3902,0,',','.');?></td>
<td></td>
<?php
	}
}
?>
</tr>
<?php								
	if($data_Laba3903 > 0){
		$SubTotal_Laba=0;								

		foreach($data_Laba3903 as $row){
			$nokir_Laba				= $row->no_perkiraan;
			$nm_perkiraan_Laba	= $row->nama;
			$vFaktor = $row->faktor;
			$vSaldoAwal_ = $row->saldoawal * $vFaktor;
			$vSaldoAwal = $row->saldoawal3903;
			$vDebet = $row->debet;
			$vKredit = $row->kredit;										

			$jml_Laba3903					= ($vDebet - $vKredit);	
			// $jml_Laba					= $vSaldoAwal + ($vDebet - $vKredit) * $vFaktor;								
		
			$SubTotal_Laba 	=  $jml_Laba3901 + $jml_Laba3902 + $jml_Laba3903;										

			$rp_SubTotal_Laba			= number_format($SubTotal_Laba,0,',','.');										
?>
<tr>
	<td><?=$nokir_Laba?></td>
	<td><?=$nm_perkiraan_Laba?></td>
	<td align="right"><?=$rp_jml_Laba		= number_format($jml_Laba3903,0,',','.');?></td>
	<td></td>
	<?php
		}
	}
	?>
</tr>

<tr>
	<td></td>
	<td><b>Sub Total LABA</b></td>
	<td align="right"><b><?=$rp_SubTotal_Laba?></b></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td align="center"><b>TOTAL LIABILITIES AND EQUITY</b></td>
	<?php
		$TotalLaba 			= $SubTotal_Hutang + $SubTotal_Modal + $SubTotal_Laba;
		$rp_TotalLaba		= number_format($TotalLaba,0,',','.');
	?>
	<td align="right"><b><?=$rp_TotalLaba?></b></td>
	<td></td>							
</tr>

</table>
</div>

						
				