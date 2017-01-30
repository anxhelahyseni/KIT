<html>
<h1>Koment!</h1>
</html>

<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("comments");

$find_comments = mysql_query("SELECT * FROM comments");
while($row = mysql_fetch_assoc($find_comments))
 { 
    $comment_name = $row['name'];
    $comment = $row['comment'];
	
	echo "$comment_name - $comment<p>";
 }
if{
	(isset($_GET['error']))
	echo "<p> 100 Character Limit";
 }
?>


html>
<form action = "post_comment.php" method = "POST">
   <input type = "text" name = "Name" value = "Emri"><br>
   <textarea name = "comment" cols = "50" rows = "2"> Vendos komentin </textarea>
   <input type = "submit" value = "Komento">
</form>
</html> 
