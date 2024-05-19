<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
define('__ROOT__', dirname(dirname(__FILE__)));
require_once('../classes/Kontakt.php');
use formular\Kontakt;

$meno = $_POST['meno'];
$email = $_POST['email'];
$sprava = $_POST['sprava'];

// Overenie údajov
if (empty($meno) || empty($email) || empty($sprava)) {
    die('Chyba: Všetky polia sú povinné!');
}
// Uloženie správy do databázy
$kontakt = new Kontakt();
$ulozene = $kontakt->ulozitSpravu($meno, $email, $sprava);
if ($ulozene) {
    header('Location: ../thankyoupage.php');
} else {
    die('Chyba pri odosielaní správy do databázy!');
}

