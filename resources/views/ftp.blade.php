<?php
    $namafile="filetp/logger1-S8P18120015-AN18070759-2020-02-18T16-30-00+0700-15min.csv";
    $pemisah=",";
    $datacsv = fopen($namafile, "r");
    while (($get = fgetcsv($datacsv, 10, $pemisah)) !== FALSE)
    {
        echo $get[1]."</br>";
    }
    fclose($datacsv);
?>