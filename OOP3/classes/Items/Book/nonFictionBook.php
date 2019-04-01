
<?php
namespace classes\Book\nonFictionBook;
abstract class NonFiction extends Book {
    
   
    protected $bookAuthor=array();
    protected $edition;
    
    protected function addAuthors(){
        $args = func_get_args();
       $this -> bookAuthor = $args;
    }
}