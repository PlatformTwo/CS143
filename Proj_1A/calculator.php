<!DOCTYPE html>
<html>
<body>

<h1> Calculator </h1>

<form method="get">
Type an expression in the following box (e.g., 10.5+20*3/25). <br><br><input type="text" name="query">
<input type= "submit" value="Calculate"><br>
</form>

<?php $query = $_GET["query"];

if(empty($query))
{
return;
}

$searchpattern = "/^\-?(([1-9][0-9]*(.[0-9]+)?)|(0.[0-9]+))([\+\-\*\/]\-?(([1-9][0-9]*(.[0-9]+)?)|(0.[0-9]+)))*/";



if (preg_match($searchpattern, $query)) {$result = eval("return $query;");}
else {$result = "Invalid Expression!";}


Print "<br><strong>Result</strong><br><br>";

if($result!="Invalid Expression!") {
echo $query;
echo "=";
}

echo $result;


?>



</body>
</html>
