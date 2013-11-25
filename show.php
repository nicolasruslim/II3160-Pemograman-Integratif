<?php
	$xml = simplexml_load_file($_GET['data']);
	//menyatakan bahwa content yang ditampilkan dalam format xml.
	header('Content-type: text/xml');
	//menampilkan <root> dari file xml
	echo "<".$xml->getName().">";
	//mengambil tiap elemen pada array $xml disimpan pada $child
	foreach($xml->children() as $child)
	   {
	   		echo "<".$child->getName().">";
	   		foreach($child->children() as $child1)
	   		{
	   			echo "<".$child1->getName().">".$child1."</".$child1->getName().">";
	   		}
	   		echo "</".$child->getName().">";
	   }
	//menampilkan </root> dari file xml
	echo "</".$xml->getName().">";
?>