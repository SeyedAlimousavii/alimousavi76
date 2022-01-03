
<?php
 echo $_GET['num1']+$_GET['num2'];
?>
<!DOCTYPE html>
<html>
<body>



    <form action="index.php" method="GET">
        <label for="fname">First number:</label><br>
        <input type="number" id="fname" name="num1" ><br>
        <label for="lname">Second name:</label><br>
        <input type="number" id="lname" name="num2" ><br><br>
        <input type="submit" value="Submit">
</form> 


</body>
</html>