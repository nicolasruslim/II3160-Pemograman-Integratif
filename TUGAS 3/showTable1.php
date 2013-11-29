<?php
$a="./progin-itb/II3160-Pemograman-Integratif/show.php?data=makanan.xml"
$b="./progin-itb/pemrograman-integratif/show.php?source=C:\xampp\htdocs\PROGIN\progin-itb\pemrograman-integratif\datakelas.xml"
$c="./progin-itb/BernadetteVina/output2.xml"
$d="./progin-itb/BintangAdinandra/menu.xml"
$e="./PROGIN/progin-itb/ConvertXML/test.xml"
$f="./progin-itb/habib-andy/data/makanan.xml"
$g= "./progin-itb/II3160--Pemrograman-Integratif-/DaftarIdol.xml"
$h= "./progin-itb/II3160-Tugas1-Tugas2/csvoutput.xml"
$i= "./progin-itb/II3160-Tugas2-18211055-18211026/index.php/api/test/juses"
$j= "./progin-itb/18211010-18211035/progin.xml"
$k="./progin-itb/IPT-Assignments/data1.xml"
$l="./progin-itb/pemrograman_integratif/output.xml"
$m="./progin-itb/II3160-Progin-18211002-18211033/dbxml.xml"
$n="./progin-itb/progin/contoh.xml"
$o="./showTable.php?data=./progin-itb/Progint/data/xml/1.xml"
$p="./progin-itb/Protif-WebService-V02/Protif/converter/mencari/buku.xml"
$q= "./progin-itb/testPHP2/test.xml"
$r= "./progin-itb/tugas-2-pemrograman-integratif/tugas2.php?db=data3"
$s="./progin-itb/web-service/datasiswa.xml"
$t="./progin-itb/II3160-18211003-18211050/Menu.xml"

switch ($_GET['data']) {
   case 'a':
      $data=$a;
      break;
   
   case b:
      $data=$b;
      break;

   case c:
      $data=$c;
      break;

   case d:
      $data=$d;
      break;

   case e:
      $data=$e;
      break;

   case f:
      $data=$f;
      break;

   case g:
      $data=$g;
      break;

   case h:
      $data=$h;
      break;

   case i:
      $data=$i;
      break;

   case j:
      $data=$j;
      break;

   case k:
      $data=$k;
      break;

   case l:
      $data=$l;
      break;

   case m:
      $data=$m;
      break;

   case n:
      $data=$n;
      break;

   case o:
      $data=$o;
      break;

   case p:
      $data=$p;
      break;

   case q:
      $data=$q;
      break;

   case r:
      $data=$r;
      break;

   case s:
      $data=$s;
      break;

   case t:
      $data=$t;
      break;
}

$xml = simplexml_load_file($data);

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