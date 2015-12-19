<?php
define("SITE_NAME" , "PHPat");
define("SITE_URL", "http://phpat.projet.isi.com");
define("PAGE_ID", "page_id");
define("USER_IS_LOGGED", "user_is_logged"); // L'utilisateur est connecté ou non

// Declaration des des variables pour la creation a notre base de donnees

$servername = "localhost";
$username = "turntablelist";
$password = "p62";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn);

