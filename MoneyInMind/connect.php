<?php
$webserver="hhamilton13.sites.eeecs.qub.ac.uk";
    $user="hhamilton13";
    $passwd = "wydMKktpfGDR5cn2";
    $database="hhamilton13";
    $conn = new mysqli($webserver, $user, $passwd, $database);
    
    if ($conn -> connect_errno){
        echo "Failed to connect to: " . $conn->connect_errno;
    }
