<?php
    # check if the min and max variable are set.
    if(isset($_POST["min"]) and isset($_POST["max"])){

    }elseif (isset($_POST["min"]) or isset($_POST["max"])){
        echo "Only one of the two input where given."
    }

?>

<html>
    <head>
        <title>Guess that number!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form method="post">
            <input type="input" name="min"><br>
            <input type="input" name="max"><br>
            <input type="submit" nam
        </form>
    </body>
</html>