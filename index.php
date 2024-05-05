<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$password = "";
for ($i=0; $i < 10 ; $i++) { 

    // $rndomNum = (string) rand(0, 9);
    // $password = $password . $rndomNum;
    $letter = chr(rand(33,126));
    
    $password = $password . $letter;

};

echo $password; 







?>

</body>
</html>