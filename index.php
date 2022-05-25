<?php 
   //Ting tong tu 1 den 100
   $tong =0;
   for($i = 1; $i <= 100; $i++){
       if($i > 50) continue;
       $tong +=$i;
   }
   echo "i: $i <br>";
   echo "Tong: $tong";
?>