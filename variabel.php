<h3>Percobaan Variabel</h3>
<?php
	$nama = "Gopal";
	$semester = 8;
	$honor = 10.5;

	var_dump(array($nama,$semester,$honor)); echo "<br>";

	function printnama()
	{
		global $nama;
		echo "<h3>$nama</h3>";
	}

	printnama();

?>