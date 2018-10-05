<?php 
	
	include 'koneksi.php';
	if (isset($_GET['id'])) {
		$id		= $_GET['id'];
		$sql	= "SELECT * FROM akun WHERE id = $id";

		if ($koneksi -> query($sql)) {
			$result = $koneksi -> query($sql);
			$row	= $result -> fetch_assoc();
				
			}	
		}

	else {
		if (isset($_POST['input'])) {
			include('koneksi.php');
			
			if ($koneksi) {
				$nim  = $_POST['nim'];
				$nama = $_POST['nama'];
				$email= $_POST['email'];
				//$pass = $_POST['pass'];
				$cekemail= strpos($email, '@gmail.com');

				if (strlen($nim)<=10) {
					if (is_numeric($nim)== True ) {
						if (strlen($nama)<= 25) {
							if (is_string($nama) ==True) {
								if ($cekemail !== FALSE) {
									
								}
								$sql = $koneksi -> query("
										INSERT INTO `mhs` (`nim`,`nama`,`email`)
										VALUES ('$nim','$nama','$email')");

								echo "REGISTRASI SUKSES";
								
							}
							else{
								echo "Email tidak sesuai";
							}
						}
						else{
							echo "Panjang Nama tidak boleh lebih dari 25";
						}
						
					}
					else{
						echo "NIM Harus angka";
					}
					
				}
				else{
					echo "Panjang nim tidak boleh lebih dari 10 digit";
				}
				
			}
			else{
				echo "Registrasi Gagal";
			}
			
		}
	}
?>
