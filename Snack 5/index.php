<!--Snack 5-->

<?php
$testo = "It is a long established fact that a reader will 
be distracted by the readable content of a page when looking 
at its layout. The point of using Lorem Ipsum is that it has
a more-or-less normal distribution of letters, as opposed to
using 'Content here, content here', making it look like readable
English. Many desktop publishing packages and web page editors 
now use Lorem Ipsum as their default model text, and a search 
for 'lorem ipsum'will uncover many web sites still in their 
infancy. Various versions have evolved over the years, 
sometimes by accident, sometimes on purpose 
(injected humour and the like).";

$testoDiviso = explode('.',$testo,);

for ($i=0; $i < count($testoDiviso); $i++) {

    echo "<p>" . $testoDiviso[$i] . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>