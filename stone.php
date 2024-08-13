<?php

$p1=0;
$p2=0;
$b=["stone","paper","sisor"];
   function systemc(){
      $c=rand(1,3);
      return $c;
   }
   function player(){
      $b=(int)readline("enter the number");
      return $b;

   }
   function winner($player,$system,$b){
      $arr = $b;
      global $p1,$p2;
      echo "System chose: " .$arr[$system - 1] . "\n";
      echo "You chose: " .$arr[$player-1 ] . "\n";
      if ($player == $system) {
         echo "It's a draw!\n";
     } elseif (($player == 1 && $system == 3) || ($player == 2 && $system == 1) || ($player == 3 && $system == 2)) {
         echo "You win!\n";
         $p1++;
     } else {
         echo "System wins!\n";
         $p2++;
       
     }
   }
   function game($b){
      for($i=0;$i<3;$i++){
         $system1 = Systemc();
         $player1 = player();
         Winner($player1, $system1,$b);
      } 
      wincheck();
   }

   function wincheck(){
      global $p1,$p2;
      if($p1>$p2){
         print("User is a Winner");
      }else if($p2>$p1){
         print("computer is a winner");
      }else{
         echo("math draw");
      }
   }

      game($b);
   
   