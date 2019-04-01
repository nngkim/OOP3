<?php
//echo __DIR__;
//namespace classes\Items\Book;
include 'item.php';

Class Book extends classes\Items\Item{
    //all of properties can change to protected
    private $bookTitle;
    private $bookAuthor;
    private $outDate;
    private $dueBackDate;
    
//could define a constant of 1 week
        public function __construct($bookTitle, $bookAuthor) {
        $this->bookTitle = $bookTitle;
        $this->bookAuthor = $bookAuthor;
    }
    
    public function printTitle() {
        echo $this->bookTitle. "\n";
    }
    public function printAuthor() {
        echo $this->bookAuthor."\n";
        
    }
 
   public function borrowItem() {
   $today=date("d.m.Y");
   $this -> outDate = $today;
   $returnDate = date("d.m.Y", strtotime("$today +1 week"));
   $this -> dueBackDate = $returnDate;
   echo "You start borrowing $this->bookTitle from ".$this->outDate . "\n";
   echo "and the book is due on ".$this ->dueBackDate. "\n";
   // can't return two varibles e.g. $this -> outDate and $this -> dueBackDate so use $this
    return $this;
    }
    //Then would you store this somewhere!?
    
    public function renewItem() {
        
        //Can enter in a different time zone to return date
        $oldDate = $this -> dueBackDate;
      $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
        $this ->dueBackDate = $newDate;
        echo "you just renewed this loan and the new due back date is ".$this ->dueBackDate."\n";
        return $this;
        
    }
    
}

$book = new Book('harry','Jk');
$book->printAuthor();
$book->borrowItem();
$book->renewItem();