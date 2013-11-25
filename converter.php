//Dibuat oleh:
//Gunawan 18211007
//Nurafni Eka Agustina 18211012
//Nicolas Novian Ruslim/18211031

<?php
$input    = $_GET['jenis'].".csv";
$output   = 'menu.xml';

//Membuka file csv
$fileInput  = fopen($input, 'rt');

//Mengambil header dari file csv 
$headers = fgetcsv($fileInput);

//Membuat objek DOM
$doc  = new DomDocument();
$doc->formatOutput = true;

//Menambahkan root pada file xml
$root = $doc->createElement('daftar_'.$_GET['jenis']);
$root = $doc->appendChild($root);

//Melakukan pengulangan untuk membentuk child dan subchild pada file xml
while (($row = fgetcsv($fileInput)) !== FALSE)
{
 //membuat elemen child 'makanan'
 $container = $doc->createElement($_GET['jenis']);
 foreach ($headers as $i => $header)
 {
  //membuat elemen subchild 
  $child = $doc->createElement($header);
  $child = $container->appendChild($child);
     $value = $doc->createTextNode($row[$i]);
     $value = $child->appendChild($value);
 }

 $root->appendChild($container);
}

//menyimpan hasil konversi XML ke file output
$strxml = $doc->saveXML();
$handle = fopen($output, "w");
fwrite($handle, $strxml);
fclose($handle);
?>
