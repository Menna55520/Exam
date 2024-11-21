<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="400px" border="1px" cellspacing="0px">
        <?php
            for ($i=0; $i < 8 ; $i++) { 
               echo "<tr>";
               for ($j=0; $j < 8; $j++) { 
                if(($i + $j) % 2 == 0){
                    echo"<td bgcolor = black height=40px width=20px></td>";
                }else{
                    echo"<td bgcolor = white height=40px width=20px></td>";
                }
               } 
               echo "</tr>";
            }
        ?>
    </table>
</body>
</html>