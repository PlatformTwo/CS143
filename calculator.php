<!DOCTYPE html>
<html>
<body>

<h1> Calculator </h1>

<form method="get">
What do you want to calculate?: <input type="text" name="query"><br>
<input type= "submit" value="Calculate"><br>
</form>

<?php $query = $_GET["query"]; ?>

Your query is:<?php echo $query; ?><br>

<?php $result = eval("return $query;"); ?>



Result is:<?php echo $result; ?>


</body>
</html>
