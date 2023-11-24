<?php

$mysqli = @new mysqli('localhost', 'visitor','Muunjal2', 'autosalloni');

if ($mysqli -> connect_errno) {
  die("Connection error: " . $mysqli -> connect_error);
}

return $mysqli;
?>