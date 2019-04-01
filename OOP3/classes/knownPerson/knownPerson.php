<?php
namespace classes\knownPerson;
Abstract Class knownPerson implements itemAddable, detailsUpdateable, itemRenewable, allItemRenewable, searchable, itemsCreatable, memberCreateable{
    //Create abstract class instead of __construct
    private $firstName;
    private $lastName;
    private $memType;
    private $addFirstLine; 
    private $addSecLine;
    private $addThirdLine;
    private $postCode;
    private $teleNumber;
    private $email;
    private $userFine;
 
protected function __construct (string $firstName, string $lastName, string $memType, string $addFirstLine, string $addSecLine, string $addThirdLine, string $postCode, string $teleNumber, string $email, string $userFine){
        $this -> firstName = $firstName;
        $this -> lastName = $lastName; 
        $this -> memType = $memType;
        $this -> addFirstLine = $addFirstLine;
        $this -> addSecLine = $addSecLine; 
        $this -> addThirdLine = $addThirdLine;
        $this -> postCode = $postCode;
        $this -> number = $teleNumber;
        $this -> email = $email;
        $this -> userfines = $userFine;
    }
}
   /* public function updateNumber($newNumber) {
        $this->number = $newNumber;
        echo $this->number;
        return $this;
    }
    public function addBook(ItemBook $newBook) {
        $newBook->borrowItem();
        array_push($this->memberItems, $newBook);
        return $this;
    }
    
        public function addDVD(ItemDVD $newDVD) {
        if ($this -> age > $newDVD -> DVDcertificate){
        $newDVD->borrowItem();
        array_push($this->memberItems, $newDVD);
        return $this;}
        else {echo 'You are not elidgable for this rental';}
    }
    public function __set($key, $value) {
        $this->$key = $value;
    }
    public function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }
   ?>