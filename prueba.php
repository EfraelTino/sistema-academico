<?php 

    $a= 38 ;
    $b= 2 ;

    if($a % $b === 0) {
        echo 'par';
    }else{
        echo 'impar';
    }
    $c = 5;
    $d = 100; 
    $contador = 0;
    for ($i=$c ; $i <= $d; $i++) { 
        if( $i % 2 === 0 ){
        $contador ++;
        }

    }
    echo $contador;


    $a= 8;
    $b=5;
    $c =10;
    if ($a > $b && $a > $c ) {  
        echo $a.' Es mayor que'.$b.' y mayor que'. $c;
    }else if($b > $a && $b> $c ){
        echo  $b.' Es mayor que '.$a.' y mayor que'.$c;
    }else{
        echo $c.'    Es mayor que '. $a.' y '.$b.' ';

    }

    $d= 1;
    $e=100;
    /*while($d < $e ){
        $d++;
        /*if ($d % 2 === 0) {
            echo ' '.$d;
        } else if($d % 3 === 0){
            echo ' '.$d;
        }
    }*/

    /*
    do {
        echo $a."<br>";
        $a++;
    } while ($a <= $e); 
    */




?>