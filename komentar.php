<form method="POST">
	<h1>KOMENTAR</h1>
	<textarea name="komentar"></textarea><br>
	<input type="submit" name="submit" value="SEND">
</form>

<?php
	if (isset($_POST['submit'])) {
		$komentar=$_POST['komentar'];

		if (str_word_count($komentar)>=5) {
			echo "<b>Komentar</b> : ";
			echo $komentar;

			
		}
		else{
			echo "Harus memasukkan lebih dari 5 Kata";
		}
		
	}
?>
