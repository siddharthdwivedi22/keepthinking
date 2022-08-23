<?php

$place = "Jimmy's Place";
$sql = "INSERT INTO place(name) VALUES('{$place}')";
$this->db->query($sql);

// It will produce an error. The string contains special character which has to be Escaped otherwise it will throw a syntax error.
// This can be fixed using mysqli_real_escape_string() or str_replace() functions to make the string like this "Jimmy\'s Place" ehich can then be processed correctly in the query

$place = mysqli_real_escape_string("Jimmy's Place");