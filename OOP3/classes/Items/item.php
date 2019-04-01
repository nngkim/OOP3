<?php
//Namespace
////parent::__construct(); where do you go???
//itemStatus(missing/available/onloan)
Abstract Class Item implements searchable, returnable, locatable, borrowable, renewable{
        
        private $outDate;
        private $dueBackDate;
        private $title;
        private $location;
        private $language;
        private $itemStatus;
   
        
        private function borrowItem() {
            $today = date("d.m.Y");
            $this->outDate = $today;
            $returnDate = date("d.m.Y", strtotime("$today +1 week"));
            $this->dueBackDate = $returnDate;
        }
        private function renewItem() {
            $oldDate = $this->dueBackDate;
            $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
            $this->dueBackDate = $newDate;
            return $this;
        }
}
