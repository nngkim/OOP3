<?php
class DVD extends Item {
public $DVDTitle;
public $DVDcertificate;
public $DVDreleaseYear;
public function __construct($DVDTitle, $DVDcertificate, $DVDreleaseYear) {
$this->DVDTitle = $DVDTitle;
$this->DVDcertificate = $DVDcertificate;
$this->DVDreleaseYear = $DVDreleaseYear;
}
}


