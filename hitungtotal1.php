<?php
	 //$cssFile = "style.css";
     //echo "<link rel='stylesheet' href='" . $cssFile . "'>";

$input    = 'makanan.csv';
$output   = 'makan.xml';

// Buka file csv, menggunakan fungsi fopen
$fileInput  = fopen($input, 'rt');

// Dapatkan header dari file csv menggunakan method fgetcsv
$headers = fgetcsv($fileInput);

// Buat Objek DOM untuk mempermudah penggunaan
$doc  = new DomDocument();
$doc->formatOutput = true;

// Tambahkan root pada file xml
$root = $doc->createElement('daftar_makanan');
$root = $doc->appendChild($root);

// Lakukan pengulangan untuk membentuk child dan subchild pada file xml
while (($row = fgetcsv($fileInput)) !== FALSE)
{
 //membuat elemen child 'mahasiswa'
 $container = $doc->createElement('makanan');
 foreach ($headers as $i => $header)
 {
  //membuat elemen subchild yang terdiri dari 'nim', 'nama', 'asal'.
  //elemen subchild dilihat berdasarkan array yang terdapat variabel row
  $child = $doc->createElement($header);
  $child = $container->appendChild($child);
     $value = $doc->createTextNode($row[$i]);
     $value = $child->appendChild($value);

 }

 $root->appendChild($container);
}

// echo $doc->saveXML();

//menuliskan pada file xml
//simpan xml hasil konversi ke file output
$strxml = $doc->saveXML();
$handle = fopen($output, "w");
fwrite($handle, $strxml);
fclose($handle);

//$daftarmakanan = new SimpleXMLElement('output.xml', null, true);

	$daftarmakanan = simplexml_load_file("makan.xml");
    $totalharga=0;
	if(!empty($_POST['check_list'])) {
    	foreach($_POST['check_list'] as $check) {
            echo $check."&nbsp &nbsp &nbsp &nbsp";
            foreach ($daftarmakanan as $makanan){
            	if (strcasecmp($check, $makanan->nama)==0){
	      			echo ($makanan->harga);
	      			$totalharga+=$makanan->harga;
	      		}
			}
			echo "<BR>";
	    }
            

            //bandingkan antara si nilai $check sama nama makanan xml untuk dapatkan harganya
            //
             //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
    echo "Total Harga = ".$totalharga;
?>