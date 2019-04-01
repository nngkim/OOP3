<?php
namespace classes\knownperson\staff;
Class staff extends knownPerson{
    
    private $staffLevel;
    private $staffId;
    
    private function __construct(string $staffLevel, string $staffId){
    $this -> staffLevel = $staffLevel;
    $this -> staffId = $staffId; 
    }
}
