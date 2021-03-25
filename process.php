<?php
//capture comment from form using post
$comment = $_POST["comment"];
//Get the file 
$file = "log.txt";
//write the new text file 
file_put_contents($file, $comments);
//send the user back to index pages to view changes      
header('location: http://localhost/');
?>
