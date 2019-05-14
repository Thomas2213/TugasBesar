<?php 
session_start();
 
  
    
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		
		komentar	:
		<textarea name="komentar" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>