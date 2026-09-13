 <html>
    <body>

<form method="post">
    Enter No 1:
    <input type="text" name="no1">
    <br><br>
    <input type="submit" name="submit" value="Click">
</form>

    </body>
 </html>

 <?php

 if(isset($_POST['submit']))
    {
      $a = $_POST['no1'];
      if($a>0)
        {
            echo "Number is POSITIVE";
        }
        else if ($a<0)
            {
                echo "Number is NEGATIVE";

            }
            else 
                {
                    echo "Number is ZERO";
                }

    }
?>
<!-- I am trying to figure out how to remember this syntax since its lil hard to remember 
  -->