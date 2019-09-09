<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="text/stylesheet" type="" href="style.css">
    <title>Chess Board Assignment</title>
</head>
<body>

<table width="270px" cellingspacing="0px" cellingpadding="0px" border="1px">

<?php 

for ($row=1; $row<=8; $row++) {

    echo "<tr>";
    
    for ($col=1; $col<=8; $col++){

        $total = $row + $col;

        if ($total%2==0){

            echo "<td width=30px height=30px bgcolor=white></td>";

        } else  {

            echo "<td width=30px height=30px bgcolor=black></td>";

        }
    }
    echo "</tr>";
}
?>
    
</table>
    
</body>
</html>