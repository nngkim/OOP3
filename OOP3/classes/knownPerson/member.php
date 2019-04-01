<?php
namespace classes\knownperson\member;
class member extends knownPerson {
    private $myLoans;	
    private $userFine;
    private $memberID;
    private $memberType;
    private $membershipStatus;
//write method for updating member Type and status here
}


/*<?php
Class member extends knownPerson{

 
 private $myLoans=array();
 private $userFine;
 private $memberId;
 private $memberType;   
 private $membershipStatus;
         
 public function __construct(string $myLoans, string $userFine, string $memberId, string $memberType, string $membershipStatus){
 $this -> myLoans = $myLoans;
 $this -> userFine = $userFine;
 $this -> memberId = $memberId;
 $this -> memberType = $memberType;
  $this -> membershipStatus = $membershipStatus;
}
}
