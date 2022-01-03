<?php
if ($_POST['Uname']=='admin') {
    if ($_POST['pas']=='1234') {
       echo "welcome";
    }
    else {
        echo "Password is wrong";
    }
}
else {
    echo "Username is wrong";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <form action="index.php" method="POST">
            
            <label for="Uname">Username:</label><br>
            <input type="text" id="Uname" name="Uname"><br>
            <label for="pas">Password:</label><br>
            <input type="text" id="pas" name="pas"><br><br>

            <input type="submit" value="Submit">
        </form> 

</head>
<body>
    
</body>
</html>