<?php
  function kodo_validarcpf($numerocpf){
  $digito1 = $numerocpf[0] * 10;
  $digito2 = $numerocpf[1] * 9;
  $digito3 = $numerocpf[2] * 8;
     
  $digito4 = $numerocpf[4] * 7;
  $digito5 = $numerocpf[5] * 6;
  $digito6 = $numerocpf[6] * 5;
     
  $digito7 = $numerocpf[8] * 4;
  $digito8 = $numerocpf[9] * 3;
  $digito9 = $numerocpf[10] * 2;
   
  $soma = $digito1 + $digito2 + $digito3 + $digito4 + $digito5 + $digito6 + $digito7 + $digito8 + $digito9;
   
  $resto = $soma % 11;
   
  if($resto < 2){
  $digito10v = 0;
  }
  else{
  $digito10v = 11 - $resto;
  }
   
  /*segundo digito*/
   
  $digito1 = $numerocpf[0] * 11;
  $digito2 = $numerocpf[1] * 10;
  $digito3 = $numerocpf[2] * 9;
     
  $digito4 = $numerocpf[3] * 8;
  $digito5 = $numerocpf[4] * 7;
  $digito6 = $numerocpf[5] * 6;
     
  $digito7 = $numerocpf[6] * 5;
  $digito8 = $numerocpf[7] * 4;
  $digito9 = $numerocpf[8] * 3;
   
  $digito10 = $digito10v * 2;
   
  $soma = $digito1 + $digito2 + $digito3 + $digito4 + $digito5 + $digito6 + $digito7 + $digito8 + $digito9 + $digito10;

  $resto = $soma % 11;
   
  if($resto < 2){
  $digito11v = 0;
  }
  else{
  $digito11v = 11 - $resto;
  }
   
  if(($numerocpf[12] == $digito10v) && ($numerocpf[13] == $digito11v)){
  return true;
  }
  else{
  return false;
  }
  }
?>
