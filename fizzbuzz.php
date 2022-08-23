<?php
declare(strict_types = 1);

class Fizzbuzz {
   const FIZZ = "Fizz";
   const BUZZ = "Buzz";
   const FIZZ_BUZZ = "FizzBuzz";

   public function __construct()
   {
      // Do nothing on instantiation
   }


   function displayFizzBuzz(int $range) {
      try {
         if(!is_int($range)) throw new Exception("Only integer accepted");

         $limit = range(1, $range);

         $array = [];
         foreach($limit as $key => $number) {
            if($number % 15 == 0) {
               $array[$key] = self::FIZZ_BUZZ;
            } elseif($number % 3 == 0) {
               $array[$key] = self::FIZZ;
            } elseif($number % 5 == 0) {
               $array[$key] = self::BUZZ;
            } else {
               $array[$key] = $number;
            }
         }
         return implode("<br />", $array);

      } catch (Exception $ex) {
         return $ex;
      }
   }
}

$cl = new Fizzbuzz();
echo $cl->displayFizzBuzz(100);