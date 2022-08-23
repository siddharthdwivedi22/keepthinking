<?php
declare(strict_types = 1);

$needle = "London, England, uk";
$haystack = array(
   1 => array("London", "Ontario", "Canada"),
   8 => array("Greater London", "England", "UK"),
   4 => array("London", "England", "United Kingdom"),
   9 => ARRAY("London", "California", "United States")
);

echo best_match($needle, $haystack);

function best_match($needle, $haystack) {
   try {
      if(!is_array($haystack)) throw new Exception("Haystack must be an array");
      $places_string_array = [];
      $best_match_no = null;
      $needle = strtolower($needle);
      foreach($haystack as $key => $string_array) {
         $places_string_array[$key] = implode(', ', $string_array);

         if(strpos(strtolower($places_string_array[$key]), $needle) == false) continue;
         $match = $places_string_array[$key];
         $best_match_no = $key;
         if(empty($best_match_no)) throw new Exception("Sorry, no matches found");
      }


   } catch (Exception $ex) {
      return $ex;
   }
   return $best_match_no;
}