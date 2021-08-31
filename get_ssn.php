<?php
    // getting SSN as XXX-XX-XXXX

    $ssn1 = rand(0, 999);
    $ssn2 = rand(0, 99);
    $ssn3 = rand(0, 9999);

    while (!isPrime($ssn1)) {
        $ssn1 = rand(0, 999);
    }

    while (!isPrime($ssn2)) {
        $ssn2 = rand(0, 99);
    }

    while (!isPrime($ssn3)) {
        $ssn3 = rand(0, 9999);
    }

    function isPrime($n) {
        // if number is Prime
        for($x=2; $x<$n; $x++) {
            if($n %$x ==0) {
                return false;
            }
        }
        return true;
   }

   $ssn1 = (strlen($ssn1)==1) ? '00'.$ssn1 : ((strlen($ssn1)==2) ? '0'.$ssn1 : $ssn1);
   $ssn2 = (strlen($ssn2)==1) ? '0'.$ssn2 : $ssn2;
   $ssn3 = (strlen($ssn3)==1) ? '000'.$ssn3 : ((strlen($ssn3)==2) ? '00'.$ssn3 : ((strlen($ssn3)==3) ? '0'.$ssn3 : $ssn3));

   echo $ssn1.' - '.$ssn2.' - '.$ssn3;
?>

