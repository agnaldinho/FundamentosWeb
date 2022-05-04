<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php

        $x=1;
        
        while($x<=10)
        {
            
            echo "<li>Number: ",$x,"</li>";
            $x++;
        }
    ?>
    </ul>

</body>
</html>