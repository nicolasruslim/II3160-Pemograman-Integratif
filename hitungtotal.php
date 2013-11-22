//Dibuat oleh:
//Gunawan 18211007
//Nurafni Eka Agustina 18211012
//Nicolas Novian Ruslim/18211031

<?php
	$_GET['jenis']='makanan';
	include 'converter.php';
	$daftarmakanan = simplexml_load_file("menu.xml");
    $totalharga=0;
	//memeriksa apakah checkbox dipilih atau tidak
	if(!empty($_POST['check_list'])) {
    	foreach($_POST['check_list'] as $check) {
			//menampilkan nama makanan yang dipilih oleh user melalui checkbox
            echo $check."&nbsp &nbsp &nbsp &nbsp";
            foreach ($daftarmakanan as $makanan){
				//membandingkan string nama makanan yang dipilih oleh user melalui checkbox dengan data di XML
            	if (strcasecmp($check, $makanan->nama)==0){
					//menampilkan harga makanan yang dipilih
	      			echo ($makanan->harga);
					//menghitung total harga
	      			$totalharga+=$makanan->harga;
	      		}
			}
			echo "<BR>";
	    }}
	//menampilkan total harga yang harus dibayar
    echo "Total Harga = ".$totalharga;
?>
`