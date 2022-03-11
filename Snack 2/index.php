<!--Snack 2-->

<?php
 $name = $_GET['name'];
 
 $email = $_GET['email'];
 
 $age = $_GET['age'];
 
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

 <h3>
     Il nome inserito è (<?php echo $name;?>)
 </h3>

 <h3>
     La mail inserita è (<?php echo $email;?>)
 </h3>

 <h3>
     L'età inserita è (<?php echo $age;?>)
 </h3>

 <!--VERIFICA NOME-->
 <h4>
     <?php
       if (strlen($name) <= 3) {
           echo "ERROR *il nome deve essere di 4 o più caratteri";
       } else {
           echo "Il nome inserito è valido";
       }
     ?>
 </h4>
 <!--VERIFICA EMAIL-->
 <h4>
     <?php
     if (strpos($email,'@') !== false && strpos($email,'.') !== false) {
         echo "L'indirizzo email è valido";
     } else {
         echo "ERROR *L'indirizzo email non è valido";
     }
     ?>
 </h4>

 <!--VERIFICA ETA'-->
 <h4>
     <?php
     if (is_numeric($age)) {
        echo "L'età inserita è valida";
    } else {
        echo "ERROR *L'età inserita non è un numero";
    }
     ?>
 </h4>

 <!--VERIFICA ACCESSO-->

 <h2>
    <?php
     if(strlen($name) > 3 && strpos($email,'@') !== false && strpos($email,'.') !== false && is_numeric($age)) {
         echo "ACCESSO CONSENTITO";
     } else {
         echo "ACCESSO NEGATO";
     }
    ?>
 </h2>
    
</body>
</html>