<?php
$user = "Gaurav";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<style>
    h1{
        color: white;
        text-align: center;
    }
    h2{
        color: white;
        text-align: left;
    }
    h3{
        color: white;
        text-align: left;
    }
    body{
        background-color: blue;
        color: white;
    }
   
</style>
<?php 
echo "<h1>$user,Welcome to Sample PHP Script </h1>";
echo "<h2>This Programs displays the number page visits</h2>";
echo "<h3>REFRESH PAGE</h3>"; 
?>
<?php
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>
