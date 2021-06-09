<?php

echo "<h3 style='color:red';>exercice 1: </h3>";
function getBoolean() {

    echo "true est = ";
      return true;
  
}
echo getBoolean();
   
echo "<h3 style='color:red';>exercice 2: </h3>";
function getString() {

   return "ceci est une chaine de caractére";
  
 
  
}
echo  getString();
echo "<h3 style='color:red';>exercice 3: </h3>";

function showContent(){
  $a="hello world";
  $b="j'aime le Php";
  return "le contenu de la première variable est :".$a."<br>"."le contenu de la deuxème  variable est : ".$b;

}
echo  showContent();

echo "<h3 style='color:red';>exercice 4: </h3>";
function compareNumber(){
 $z=rand(1,15);
 $y=rand(1,15);

 if ($z>$y){
   echo"ma première variable est = ". $z." ma deuxième variable est = ".$y. " donc le premier nombre est plus grand que le deuxième.";
 }else if($z<$y){
   echo "ma deuxième variable est = ".$y." ma première variable est = ".$z." donc le deuxième nombre est plus grand que le premier.";
 }else{
   echo "les deux nombres sont égaux";
 }

}
echo compareNumber();

echo "<h3 style='color:red';>exercice 5: </h3>";
function display(){
$r=rand(1,1000);
return " cette fonction retourne une chaine de caractére et un nombre alétoire ".$r;
}
echo display();


echo "<h3 style='color:red';>exercice 6: </h3>";
function getTotal($a,$b,$c){
  echo "le résultat d'addition de trois nombre est = ";
  return $a+$b+$c; 
}

echo getTotal(1,1,3);
  

?>



