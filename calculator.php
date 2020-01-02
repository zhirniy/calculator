<?php
/*
**Calculator class
*/
class Calculator {
    public $result = 0;
    //method adding a number to the result
    public function plus($var){
         return $this->result = $this->result + $var;
    }
    //minus a number
    public function minus($var){
         return $this->result = $this->result - $var;
    }
    //division method
    public function division($digit){
          if($this->result != 0){
             return $this->result = $this->result / $digit;
          }else{
            return $this->result = "division on 0";
         }
    }
    //multiplication method
    public function multiplication($var){
         return $this->result = $this->result * $var;
    }
    //round method
    public function round($var){
        if($this->result != 0){
            return $this->result = round($var);
        }else{
            return $this->result = "round with 0";
        }
    }
}
