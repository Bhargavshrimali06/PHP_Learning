<!--Program 2: Write a PHP program to find maximum number from the two numbers
entered by user -->

<html>
    <body>
<form method="post">
    Enter No 1.<input type="text" name="No1"><br><br>
    Enter No 2.<input type="text" name="No2"><br><br>
    <input type="submit" name="submit">
    
</form>

    </body>
</html>
<?php

if(isset($_POST['submit']))
    {

$no1 = $_POST['No1'];
$no2 = $_POST['No2'];

if($no1 > $no2)
    {
        echo "Number 1 is Bigger!";

    }
    else 
        {
            echo "Number 2 is Bigger!";
        }

    }

    ?>