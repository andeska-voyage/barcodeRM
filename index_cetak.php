<?php
include "conf/koneksi.php";
$no_rm = $_GET['no_rm'];
$subs1 = substr($no_rm,0,2);
$subs2 = substr($no_rm,2,2);
$subs3 = substr($no_rm,4,2);
// echo $no_rm;
// 
$sql_cari_data_nama_pasien="select nm_pasien from pasien where no_rkm_medis='$no_rm'";
$sql1 = $conect->query($sql_cari_data_nama_pasien);
$data1=$sql1->fetch_assoc();
// 
$sql_cari_data_tgl_lahir_pasien="select tgl_lahir from pasien where no_rkm_medis='$no_rm'";
$sql2 = $conect->query($sql_cari_data_tgl_lahir_pasien);
$data2=$sql2->fetch_assoc();
// 
$sql_cari_data_nik_pasien="select no_ktp from pasien where no_rkm_medis='$no_rm'";
$sql3 = $conect->query($sql_cari_data_nik_pasien);
$data3=$sql3->fetch_assoc();
// 
// header("Content-type: application/vnd.ms-word");
// header("Content-Disposition: attachment;Filename=print_label_RM_".$no_rm.".doc");
// buat barcode
include 'barcode128.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ekspor PHP ke MSWORD</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<style type="text/css">
		body{
			width: 1200px;
			margin: auto;
			font-family: 'Roboto', sans-serif;
		}

		input{
			border: none;
			padding: 10px 20px;
			background-color: green;
			color: #ffffff;
			box-shadow: 10px 10px 10px grey;
			cursor: pointer;
		}

		input:hover{
			color: black;
			transition: 250ms;
		}

	</style>
</head>
<body>
		
<table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
    <tbody>
        <tr style="height:93.05pt;">
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
        </tr>
        <tr style="height:93.05pt;">
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
        </tr>
        <tr style="height:93.05pt;">
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
        </tr>
        <tr style="height:93.05pt;">
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
            <td style="width:181.4pt; padding-right:1.08pt; padding-left:1.08pt; vertical-align:middle;">
                <p style="margin-top:10pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Nama <span style="width:12.34pt; display:inline-block;">&nbsp;</span><strong><span style="font-size:6pt;">:</span></strong><strong><span style="font-size:6pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-size:8pt;"><?php echo $data1['nm_pasien'];?></span></strong></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">Ttl<span style="width:26.53pt; display:inline-block;">&nbsp;</span>: <?php echo date("d-m-Y", strtotime($data2['tgl_lahir']));?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">No.RM<span style="width:10.59pt; display:inline-block;">&nbsp;</span>: <?php echo $subs1.'.'.$subs2.'.'.$subs3;?></p>
                <p style="margin-top:0pt; margin-left:30pt; margin-bottom:0pt; font-size:9pt;">NIK<span style="width:23.25pt; display:inline-block;">&nbsp;</span>: <?php echo $data3['no_ktp'];?></p>
                <p style="margin-top:0pt; margin-left:50pt; margin-bottom:0pt; font-size:9pt;"><?php echo bar128(stripcslashes($_GET['no_rm'])); ?></p>
                <p style="margin:0pt 4.85pt; text-align:center; font-size:11pt;"><strong>&nbsp;</strong></p>
            </td>
        </tr>
    </tbody>
</table>
    
</body>
</html>