<?php
function dirpay($money){
 return $money+10000;
    }
function vicedirpay($money){
    return $money+5000;
   }
function superviserpay($money){
    return $money+2000;
   }
   
function ofworker($money){
    $years =6;
    if($years >= 3){
        return $money+1000;
    }
    else{
        return $money-500;
    }
   }
   function getMoney($pays = null){
       $money = 7000;
       if(isset($pays))
       $money = call_user_func($pays, $money);
       return $money;
   }
   echo"Зарплата директора:\$".getMoney('dirpay')."\n";
   echo"Зарплата зам.директора:\$".getMoney('vicedirpay')."\n";
   echo"Зарплата супервизора:\$".getMoney('superviserpay')."\n";
   echo"Зарплата работника со стажем 2 годa:\$".getMoney('ofworker')."\n";
  
