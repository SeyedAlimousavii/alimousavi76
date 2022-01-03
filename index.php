<?php
        if ($_POST['Uname']=='admin') 
        {
                    if ($_POST['pas']=='1234') {
                    $a='welcome';
                    }
                    else {
                        $a='pasword is wrong';
                    }
        }
        else
        {
                $a='Username is wrong';
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
            <?php echo "$a"?>
        </form> 

</head>
<body>
    
</body>
</html>