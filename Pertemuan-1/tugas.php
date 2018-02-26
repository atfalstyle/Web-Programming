<!--
	 Nama : Muhammad Athfal
	 Kelas: 4D
	 NIM  : 16090114
-->
<h3>Tugas Pertemuan 1</h3>
<?php
	$data = array('nama' 		=> 'Muhammad Athfal',
				  'semester' 	=> 4,
				  'kelas' 		=> '4D',
				  'mk'			=> 'Web Programming');
	

	function dump()
	{	
		global $data;
		var_dump(array($data)); echo "<br>";
	}

	function tampil()
	{
		global $data;
		echo "<p>
				 Nama Saya : ".$data['nama']." <br>
			  	 Semester : ".$data['semester']." <br>
			  	 Kelas : ".$data['kelas']." <br>
			  	 Mata kuliah : ".$data['mk']."
			  </p>";
	}

	dump();
	tampil();
?>