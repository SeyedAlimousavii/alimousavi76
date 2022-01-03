
<?php
 if ($_POST['mode'] == 1) {
     echo $_POST['num1']+$_POST['num2'];
 }
?>
<!DOCTYPE html>
<html>
<body>


<hr>
    <form action="index.php" method="POST">
        <label for="fname">First number:</label><br>
        <input type="number" id="fname" name="num1" ><br>
        <label for="lname">Second name:</label><br>
        <input type="number" id="lname" name="num2" ><br><br>
        <input type="submit" value="Submit">
        <hr>
        <input type="radio" id="sum" name="mode" value="1">
        <label for="sum">sum</label><br>
        <input type="radio" id="mines" name="mode" value="2">
        <label for="mines">mines</label><br>
        <input type="radio" id="multipul" name="mode" value="3">
        <label for="multipul">multipul</label>
        <input type="radio" id="Taghsim" name="mode" value="4">
        <label for="Taghsim">Taghsim</label>
</form> 


</body>
</html>