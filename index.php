
<?php
 echo $_GET['num1']+$_GET['num2'];
?>
<!DOCTYPE html>
<html>
<body>


<hr>
    <form action="index.php" method="GET">
        <label for="fname">First number:</label><br>
        <input type="number" id="fname" name="num1" ><br>
        <label for="lname">Second name:</label><br>
        <input type="number" id="lname" name="num2" ><br><br>
        <input type="submit" value="Submit">
        <hr>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>
</form> 


</body>
</html>