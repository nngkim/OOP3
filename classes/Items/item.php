<?php

Class Item {
        private $title;
        private $location;
        private $loanOutDate;
        private $loanDueBackDate;
        private $language;
        private $itemStatus;
        public function borrowItem() {
            $today = date("d.m.Y");
            $this->outDate = $today;
            $returnDate = date("d.m.Y", strtotime("$today +1 week"));
            $this->dueBackDate = $returnDate;
        }
        public function renewItem() {
            $oldDate = $this->dueBackDate;
            $newDate = date("d.m.Y", strtotime("$oldDate +1 week"));
            $this->dueBackDate = $newDate;
            return $this;
        }
    }


