<! -- Php script for saving files as txt files. 
In the form include the <form Action="name.php" method="post"></form>

--> 


?php

if (file_exists("log.txt")) { 
$file = "log.txt";
$current = file_gets_contents($file); 
} else {
$myfile = fopen ("log.txt", "w");
header("refresh:0");

}
?>
