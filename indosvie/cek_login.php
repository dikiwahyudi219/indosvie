<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'includes/config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tbladmin where AdminUserName='$username' and AdminPassword='".md5($password)."'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['Level']=="Admin"){

		// buat session login dan username
		$_SESSION['login'] = $username;
		$_SESSION['Level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");

	// cek jika user login sebagai pegawai
	}else if($data['Level']=="Pegawai"){
		// buat session login dan username
		$_SESSION['login'] = $username;
		$_SESSION['Level'] = "Pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard-member.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>