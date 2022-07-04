<?php 
    $filecounter = "counter.txt";  
    $fl=fopen($filecounter, "r+");
    $hit=fread($fl, filesize($filecounter)); 
    echo("<br><br>"); 
    echo("<font size=4>");
    echo("Jumlah Pengunjung :");  
    echo($hit);   
    fclose( $fl );  
    $fl=fopen($filecounter, "w+");  
    $hit=$hit + 1;  
    fwrite($fl, $hit, strlen($hit));  
    fclose( $fl );  
?>