<?php 
$xml = simplexml_load_file($_GET['data']);
//mengambil tiap elemen pada array $xml disimpan pada $child
$i=0;$j=0;
	echo "<table border='2' width='500'>";
   echo '<tr>';
   foreach($xml->children() as $child)
   {
         foreach($child->children() as $child1)
         {
            echo "<td>";
            echo $child1->getName();
            echo "</td>";
            $i++;
         }
         break;
   }
   echo '</tr>';
   echo '<tr>';
   $j++;
   foreach($xml->children() as $child)
   {
   		foreach($child->children() as $child1)
   		{
            if ($j%$i==1) {
               echo '<tr>';
            }
   				echo "<td>$child1</td>";

            if($j%$i==0) {
               echo '</tr>';
            }
            $j++;
   		}
   }
   echo '</tr>';
   echo "</table>";

 ?>