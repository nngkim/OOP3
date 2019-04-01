
<?php
//namespace Books;
//all in books can be private or protected (this will mean non fiction can see it)
//non fiction should extend from book
namespace classes\Book;
abstract Class Book extends Item {

    protected $Author;
    protected $publishedYear;
    
    protected function __construct(string $Author, string $publishedYear) {
       
    $this->Author = $Author;
    echo $this->Author."\n";
    $this->publishedYear = $publishedYear;
     echo $this->publishedYear."\n";
    } 
    }
    
   /*public function borrowBook() {
   $today=date("d.m.Y");
   $this -> outDate = $today;
   $returnDate = date("d.m.Y", strtotime("$today +1 week"));
   $this -> dueBackDate = $returnDate;
   echo $this->outDate . "\n";
   echo $this ->dueBackDate. "\n";
   // can't return two varibles e.g. $this -> outDate and $this -> dueBackDate so use $this
    return $this;
    }
    //Then would you store this somewhere!?
    
   /* public function renewBook() {
        
        //Can enter in a different time zone to return date
        $oldDate = $this -> dueBackDate;
      $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
        $this ->dueBackDate = $newDate;
       // echo $this ->dueBackDate."\n";
        return $this;
     