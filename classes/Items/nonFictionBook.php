<?php
spl_autoload($args);
class NonFictionBook extends Book {
    
   
    private $bookAuthor=array();
    private $edition;
    
    public function addAuthors(){
        $args = func_get_args();
       $this -> bookAuthor = $args;
    }
}

$nonFiction = new NonFictionBook();
$nonFiction ->addAuthors();