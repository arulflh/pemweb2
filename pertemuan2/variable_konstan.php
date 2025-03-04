<?php
    define ("PHI", 3.14);
    define ("DBNAME", "Inventori");
    define ("DBSERVER", "localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kell = 2 * PHI * $jari;

    echo "Luas lingkaran dengan jari-jari ", $jari, ": ", $luas, " cm^2";
    echo "<br/>Kelliling lingkaran: ", $kell;
?>
<hr>
<?php
    echo "Nama Database: " .DBNAME;
    echo "<br/>Lokasi Database: " .DBSERVER;
?>