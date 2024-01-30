<?php
session_start();

print_r($_SESSION["phase1_data"]["lastname"]);
echo "<br>";
print_r($_SESSION["phase2_data"]["email"]);
echo "<br>";
print_r($_SESSION["phase3_data"]["gender"]);
echo "<br>"."all data"."<br>";
print_r($_SESSION["phase4_data"]["password"])

?>

