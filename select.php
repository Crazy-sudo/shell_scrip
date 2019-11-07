<html>
<head>
<style>
	.error {
		color : red;
	}
</style>
<title> selection box exper </title>
</head>
<body>
<form method = "post">
	<p> which one is favorite ? </p> 
	<select name = "subject">
		<option value = "physics"> physics </option> physics <br/><br/>
		<option value = "chemistry" > chemistry </option> chemistry <br/><br/>
		<option value = "maths" > maths </option> maths <br/><br/>
		<option value = "biology" > biology </option> biology <br/><br/>
		<option value = "english" > english </option> english <br/><br/>
		<option value = "marathi" > marathi </option> marathi <br/><br/>
	</select>
	<input type = "submit" name = "submit" value = "submit"><br/><br/>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])) {
		$favsub = $_POST['subject'];
		echo $favsub;
	}
?>