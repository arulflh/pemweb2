<?php
    $arbuah = ["Apel", "Belimbing", "Ceri", "Durian"];

    // spesifik display
    echo "Buah pertama: ", $arbuah[0];

    // Jumlah
    echo "<br/>Jumlah Buah: ", count($arbuah);

    // display
    echo "<br/>List Buah: <ol>";
    foreach ($arbuah as $buah) {
        echo "<li>", $buah, "</li>";
        } echo "</ol>";
    
    // Add
    $arbuah[] = "Enau";

    // Delete
    unset($arbuah[3]);

    // Change
    $arbuah[0] = "Anggur";

    //display with index
    echo "List Buah with Index: ";
    echo "<ul>";
    foreach ($arbuah as $buah => $V) {
        echo "<li>$buah : $V</li>";
    } echo "</ul>";

    //display with real index
    echo "List Buah with real Index: ";
    echo "<ul>";
    sort ($arbuah);
    foreach ($arbuah as $buah => $V) {
        echo "<li>$buah : $V</li>";
    } echo "</ul>";
?>