<! -- Php script for saving files as txt files. 
In the form include the <form Action="name.php" method="post"></form>

--> 
<form action="name.php" method="post>
<textarea cols="20" rows ="50" name="comment">
<?php
echo $current;
?>
</textarea>
           <input type="submit">                     
</form>

<?php
// This is the code that checks the of the file exists and then creates the file from the textarea. 
if (file_exists("log.txt")) { 
$file = "log.txt";
$current = file_gets_contents($file); 
} 
else {
$myfile = fopen ("log.txt", "w");
header("refresh:0");

}
?>

                               
                               
