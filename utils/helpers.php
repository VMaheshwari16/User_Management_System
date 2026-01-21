<?php
namespace Utils;

function printResult($label, $valid)
{
    echo "$label: " . ($valid ? "Valid" : "Invalid") . "<br>";
}
?>