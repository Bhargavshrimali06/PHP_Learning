<html>
    <body>

    <form method="post">
        Enter No.<input type="text" name="Num">
        <input type="submit" name="submit" value="Click">

    </form>
    </body>
</html>

<?php 

if(isset($_POST['submit']))
    {
        $a = $_POST['Num'];
        $num = 1;
        $n1 = 0;
        $n2 = 1;

        while($num <= $a)
            {
                $n3 = $n2+$n1;
                echo $n3 . " ";
                $n1 = $n2;
                $n2 = $n3;
                $num = $num + 1;
            }
    }
    ?>
    <!-- This one is just to understand loop since the printed num has no space in between which makes whole answer useless -->
     <!-- TO fix this issue i used . " " after n3 -->