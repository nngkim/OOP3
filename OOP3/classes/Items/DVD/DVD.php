<?php
namespace classes\DVD;
class DVD extends Item {
private $DVDcertificate;
private $DVDreleaseYear;
private function __construct( $DVDcertificate, $DVDreleaseYear) {
$this->DVDcertificate = $DVDcertificate;
$this->DVDreleaseYear = $DVDreleaseYear;
}
}
//dvd title removed
?>
