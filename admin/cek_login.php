<?php 
// mengaktifkan session pada php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
 
// menghubungkan php dengan koneksi database
include ('includes/config.php');
 
			// menangkap data yang dikirim dari form login
			$username = $_POST['username'];
			$password = $_POST['password'];
			$submit = $_POST['submit'];
			
			if($submit){
			$sql = "SELECT * from tbladmin  where username='$username' and password='$password'";
			// menyeleksi data user dengan username dan password yang sesuai
			$login = mysqli_query($con,$sql);
			// menghitung jumlah data yang ditemukan
			$cek = mysqli_fetch_array($login);
			
			// cek apakah username dan password di temukan pada database
					if($cek['username']!=""){										
						// cek jika user login sebagai admin
						$data['level']=="admin";
						// buat session login dan username
						$_SESSION['username'] = ['username'];
						$_SESSION['level'] = "admin";
						// alihkan ke halaman dashboard admin
						echo "<script>
						alert('Selamat Anda Berhasil Login');
						document.location = 'dashboard.php';
						</script>";
						// cek jika user login sebagai pegawai
					}else{ 
						echo "<script>
						alert('Anda Gagal login');
						document.location = 'index.php';
						</script>";
					}
						
			} 
?>