<?php
  $fin = 13195;
  $i = 1;

 while($i < $fin){
   if(( $fin % $i) == 0){
     $primo = $fin / $i;
	 $fin = $primo;
   }
   $i++;
}
echo $fin;
  


?>