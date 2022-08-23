<?php

$locations = array(	
    3 => array("Building1", 2),
	2 => array("Area1", 1),
    0 => array("Floor1", 3),	
    1 => array("City1"),	
    4 => array("Room1", 0),

    13 => array("Building2", 12),	
    12 => array("Area2", 11),	
    14 => array("Room2", 10),	
    10 => array("Floor2", 13),	
    11 => array("City2")
);

// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 //echo $locations[3][1];
// Printing all the keys and values one by one
$keys = array_keys($locations);
$new_array = [];
for($i = 0; $i < count($locations); $i++) {

    //if($keys[$i])
    //echo $keys[$i] . "{<br>";
        if(count($locations[$keys[$i]]) == 1) {
            $new_array[0] = $locations[$keys[$i]][0];
            $compare_key = $keys[$i];
        }
        $j = 0;
    foreach($locations[$keys[$i]] as $key => $value) {
     //   if($keys[$i])
     if(count($locations[$keys[$i]]) == 1) continue;
     if($locations[$keys[$i]][1] = $compare_key) $new_array[$i] = $locations[$keys[$i]][0];
        //echo $key . " : " . $value . "<br>";
        
    }
   // echo $locations[$keys[1]][1];
   // echo "}<br>";
}
var_dump($new_array);

$i = 0;
$new_array = [];
foreach($locations as $parent_id => $loc) {
   // if(count($loc) == 1) $new_array[$i] = $loc[1];
    //$i++;
}

//var_dump($new_array);