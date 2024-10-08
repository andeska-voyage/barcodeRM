<?php
//set time zone location sesuai negara, jadikan Asia Jakarta
date_default_timezone_set('Asia/Jakarta');

//**************************start koneksi ***************************//

//set koneksi ke server sesuai host, user, password dan database
$server="192.168.0.2";
$user="sik_juni2024";
$pass="L47cDXjifHpe65AC";
$database="sik_juni2024";


//koneksikan ke server
$conect=mysqli_connect($server,$user,$pass,$database) or die('Error Connection Network');

// **************************end koneksi *********************************//

//*********************pengaturan lainnya*****************************//

//buat parameter untuk mempercepat penulisan url misal https://www.develindo.com atau http://localhost/folderwebanda

$hostname="http://localhost:8080/phpmyadmin/index.php?route=/database/structure&db=sik_13feb24";

?>