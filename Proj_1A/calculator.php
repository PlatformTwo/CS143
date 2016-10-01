<!DOCTYPE html>
<html>
<body>

<h1> Calculator </h1>

<form method="get">
Type an expression in the following box (e.g., 10.5+20*3/25). <br><br><input type="text" name="query">
<input type= "submit" value="Calculate"><br>
</form>

<?php $query = $_GET["query"];



$searchpattern = "/^[0-9]+([\+\-\*\/][0-9]+)*$/";

if (preg_match($searchpattern, $query)) {$result = eval("return $query;");}
else {$result = "Invalid Expression!";}

if($query!="")
{
Print "<br><strong>Result</strong><br><br>";
echo $result;
}

?>



</body>
</html>
