<?php
if($_POST) {
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("strony/comments.php","a");
    fwrite($handle,"<br/><center><font color= #000000> <b>" . $name . "</b></font>:<br/>" . $content . "<br/></center>");
    fclose($handle);
    // fwrite($handle ,"<b>" . $name . "</b>:<br/>" . $content . "<br/>");
}
?>

<html>
    <head>
        
    </head>
    <body>
	<center>
        <form action = "" method = "POST">
       Imię: <input type = "text" name = "name"><br/>
       Komentarz: <textarea rows = "5" cols = "25" name = "commentContent"></textarea><br/>
        <input type = "submit" value = "Wyślij"><br/>
        </form>
		<br/><br/><br/>
        <?php include "strony/comments.php"; ?>
		</center>
    </body>
</html>

