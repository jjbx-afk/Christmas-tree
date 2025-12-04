<?php


#feuilles :

 #valeur de la dernière ligne de feuilles 
$width = readline("choose a width for the leaves : ");
$height = readline("choose a height for the leaves : ");
$wood_width = readline("choose a width for the wood : ");
$wood_height = readline("choose a height for the wood : ") ;          
$current_sheet = 1;
$resultOfWidthDivision = ($width / 2);
$resultOfWoodWidthDivision = ($wood_width / 2);

#for  = (point de départ; condition de continuité; expression finales)




for ($i = 0; $i < $height; $i++)
{
  for ($j = 0; $j < $width; $j++)
  {
    if (
        $j > ($resultOfWidthDivision - 2) - $i &&
        $j < ($resultOfWidthDivision + 1) + $i 
      ) {
      echo "\e[0;34m". 'x';
    } else {
      echo ' ';
    }
  }

  echo PHP_EOL;                
}



for ($k = 0; $k < $wood_height; $k++)
{
  for ($l = 0; $l < $width; $l++)
  {
    if  (
     $l > $resultOfWidthDivision - $resultOfWoodWidthDivision ||
     $l < $resultOfWidthDivision - $resultOfWoodWidthDivision
        ){
      echo ' ';
    } else {
      echo "\e[0;35m" . 'oooo';
    }
  }
 echo PHP_EOL;  
}


// $restart = readline('Voulez-vous relancer le programme (Non/non) : ' )

  
 

?>