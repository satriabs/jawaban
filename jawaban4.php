<?php 
	function cetak_deret_fibonacci($jumlah){
		// nilai awal 
		$angka_pertama = 0;
		$angka_kedua = 1;

		//menyimpan string angka pertama
		$hasil = "$angka_pertama $angka_kedua ";
		for ($i=0; $i<$jumlah-2; $i++) {
			// menghitung angka fibonacci
			$output = $angka_kedua + $angka_pertama;
			// hasilnya akan ditambahkan ke string $hasil
			$hasil = $hasil."$output ";

			//masukan angka untuk dilakuakn perhitungan berikutnya 
			$angka_pertama = $angka_kedua;
			$angka_kedua = $output;
		}
		return $hasil;
	}
	// menampilkan nilai berdasarkan function dengan jumlah fibonacci
	
	echo cetak_deret_fibonacci(4);
	echo "<br>";

?>
