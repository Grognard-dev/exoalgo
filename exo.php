<?php

// Question 1

$a = 4;
$b = 6;

echo ('question 1 <br><br>');
if ($a < $b){
  echo "La variable b est la plus grande est égale à : ".$b;
}
elseif ($a == $b){
  echo "Les variables sont équivalentes est égale à :";
}
elseif ($b < $a){
  echo "la variable a est la plus grande";
}
else {
  echo "ce que vous avez rentré est de la merde.";
}


echo ('<br><br>question 1 - bis <br><br>');

echo max($a, $b);


echo ('<br><br>question 2 <br><br>');

if ($a > $b){
  echo "La variable b est la plus petite";
}
elseif ($a == $b){
  echo "Les variables sont équivalentes";
}
elseif ($b > $a){
  echo "la variable a est la plus petite";
}
else {
  echo "ce que vous avez rentré est de la merde.";
}

echo ('<br><br>question 3 <br><br>');

$a = 4;
$b = 6;
$temp = 0 ;

echo $a;
echo "<br>";
echo $b;
echo "<br>";echo "<br>";
$temp = $a;
$a = $b;
$b = $temp;

echo $a;
echo "<br>";
echo $b;

echo ('<br><br>question 4 <br><br>');
$resultat = $a + $b;
echo $resultat;


echo ('<br><br>question 5 <br><br>');
$resultat = rand(1,100);
echo $resultat;


echo ('<br><br>question 6 <br><br>');
$resultat = rand(5,10);
echo $resultat;

echo ('<br><br>question 7 <br><br>');

function addition($x, $y)
{
  $result = $x + $y;
  return $result;
}

$a = 5;
$b = 6;
$resultat = addition($a, $b);


echo $resultat;echo "<br>";
$b = 10;
$g = 6;
$resultat = addition($b, $g);
$res1 = addition ($resultat, $g);
echo $res1;echo "<br>";

echo ('<br><br>question 8 <br><br>');
$resultat = rand(1,100);
if ($resultat<50){
  echo "je suis nul";
}else 
echo "je suis bon";

echo ('<br><br>question 9 <br><br>');
function random($x){
  if ($x==1){
    echo "AAAA";
  }
  elseif ($x==2){
    echo "BBBB";
  }
  elseif ($x==3){
    echo "CCCC";
  }
  elseif ($x==4){
    echo "DDDD";
  }
  else{
    echo "je suis une perruche";
  }
} 
random(0);
random(1);
random(2);
random(3);
random(4);
random(5);

function randoms($x){
  switch ($x) {
    case 0:
    echo "je suis une perruche";
    break;
    case 1:
    echo "AAAA";
    break;
    case 2:
    echo "BBBB";
    break;
    case 3:
    echo "CCCC";
    break;
    case 4:
    echo "DDDD";
    break;
    case 5:
    echo "je suis une perruche";
    break;
  }
}
randoms(0);
randoms(1);
randoms(2);
randoms(3);
randoms(4);
randoms(5);

echo ('<br><br>question 10 <br><br>');

$a = rand(1, 11);
$b = rand(1, 11);
$c = rand(1, 11);
$d = rand(1, 11);
$e = rand(1, 11);
$f = rand(1, 11);
$g = rand(1, 11);
$h = rand(1, 11);
$i = rand(1, 11);
$j = rand(1, 11);
echo  "$a $b $c $d $e $f $g $h $i $j";
echo ('<br><br>question 11 <br><br>');

$tableau = array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
print_r($tableau);

echo ('<br><br>question 12 <br><br>');
$tableau = array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
foreach ($tableau as $value){
  $resulta = $resulta + $value;   
}
print_r($resulta);
?>

Exercice en js 

<script>
  document.write ('question 1')
  
  var un = 1;
  var deux = 2;
  if(un<deux){
    document.write ('un');
  }
  document.write ('question 2')
  
  if(deux>un){
    document.write ('deux')
  }
  document.write ('question 3')
  
  var temp =  un;
  un =  deux;
  deux =  temp;
  
  document.write ('question 4')
  
  document.write (un + deux)
  
  document.write ('question 5')
  
  var random = Math.floor(Math.random() * 101);
  
  document.write(random);
  document.write ('question 6')
  var randoms = Math.floor(Math.random() * 6);
  document.write(randoms);
  
  document.write ('question 7')
  function addition(nb1, nb2){
    document.write(nb1+nb2);
  }
  addition(3,9);
  document.write ('question 8')
  var randome = Math.floor(Math.random() * 101)
  if (randome<50){
    document.write('je suis nul');
  }else{
    document.write('je suis bon')
  }
  document.write ('question 9')
   function aleatoire(x){
  if (x==1){
    document.write('AAAA');
  }
  else if (x==2){
    document.write('BBBB');
  }
   else if (x==3){
    document.write('CCCC');
  }
  else if (x==4){
    document.write('DDDD');
  }
  else{
    document.write('je suis une perruche')
  }
  }
  var x = Math.floor(Math.random() * 6);
  aleatoire(x);
  
  function randoms(x){
  switch (x) {
    case 0:
    document.write("je suis une perruche");
    break;
    case 1:
   document.write('AAAA');
    break;
    case 2:
     document.write('BBBB');
    break;
    case 3:
    document.write('CCCC');
    break;
    case 4:
    document.write('DDDD');
    break;
    case 5:
    document.write("je suis une perruche");
    break;
  }
}
 var x = Math.floor(Math.random() * 6);
  aleatoire(x);

document.write ('question 10')
var a = Math.floor(Math.random() * 11);
var b = Math.floor(Math.random() * 11);
var c = Math.floor(Math.random() * 11);
var d = Math.floor(Math.random() * 11);
var e = Math.floor(Math.random() * 11);
var f = Math.floor(Math.random() * 11);
var g = Math.floor(Math.random() * 11);
var h = Math.floor(Math.random() * 11);
var i = Math.floor(Math.random() * 11);
var j = Math.floor(Math.random() * 11);
document.write(a, b, c, d, e, f, g, h, i, j);

document.write ('question 11')
var monarray= new Array(a,b,c,d,e,f,g,h,i,j);
document.write(monarray)

document.write ('question 12')

resultat = 0;

monarray.forEach(function(val) {
    resultat = resultat + val;
});
document.write( resultat);
  


</script>