
<?php
 echo $_GET['name1'+'name2'];
?>
<!DOCTYPE html>
<html>
<body>



    <form action="index.php" method="GET">
        <label for="fname">First number:</label><br>
        <input type="text" id="fname" name1="name1" ><br>
        <label for="lname">Second name:</label><br>
        <input type="text" id="lname" name2="name2" ><br><br>
        <input type="submit" value="Submit">
</form> 


</body>
</html>