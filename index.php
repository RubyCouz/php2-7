<?php
$isOk = false; //définition de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 7</title>
   </head>
   <body>
     <p>
<?php
if ($isOk == false) //déclaration de la condition
{
  echo 'c\'est pas bon';
} else {
echo 'c\'est bon';
}
 ?>
     </p>
   </body>
 </html>
