<?php 
function duplicateCount($text) {
  $k=0;
  for($i=0;$i<strlen($text);$i++){
    for($j=$i+1;$j<strlen($text);$j++){
      if($text[i]==$text[j]){
       $k++;
      }
      print_r('d');
    }
    
  }
  return $k;
}

 ?>