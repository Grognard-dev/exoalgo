 1 ) M'afficher le resultat le plus grand
 2 ) M'afficher le resultat le plus petit
 3 ) Echanger le contenu de la variable a et b
 4 ) Additionner la variable a et b
 5 ) Afficher un nombre aléatoire entre 1 et 100 ;
 6 ) Afficer un nombre aléatoire entre 5 et 10 ;
 7 ) Faire une fonction Addition ;
 8 ) Générer un chiffre aléatoire entre 1 et 100, "je suis nul si x < 50" sinon je suis bon 
 9 ) Faire une fonction qui prend en paramètre x (nombre aléatoire entre 0 et 5), si x==1 alors afficher AAAA, si x==2 alors afficher BBBB, si x==2 alors afficher CCCC, si x==4 alors afficher DDDD, sinon je suis une perruche.
 9 ) Faire la question 10 avec l'utilisation d'un switch Case
 10 )
 Générer 10 valeur aléatoire, et afficher les 10 variable
 11 )
 Ajouter 10 valeur aléatoire dans un tableau
 12 )
 Parcourir ce tableau et afficher l'addition de tous ces résultats
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
  
</script>