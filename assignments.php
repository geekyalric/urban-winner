<!DOCTYPE html>
 <html>
<head>
 <title>Hello, World!</title>
 </head>
 <body>



  <?php
                                         //PART 1

   //Question 1

 echo "Hello, World!";

?>


<?php
// Question 2

echo "Twinkle, Twinkle little star. <br/>";

$one="Twinkle";
$two="star";

echo "$one, $one little $two.<br/>";


$one ="blink";
$two = "frog";
echo "$one, $one little $two.";
 ?>
  <?php
  // question 3


  $x=10;
  $y=7;

  $sum=$x+$y;
  echo "$x + $y = $sum<br />";

  $sum=$x-$y;
  echo "$x - $y = $sum<br />";

  $sum=$x*$y;
  echo "$x * $y = $sum<br />";

  $sum=$x/$y;
  echo "$x / $y = $sum<br />";

  $sum=$x%$y;
  echo "$x % $y = $sum<br />";


  ?>

<?php

// Question 4


$number = 8;
echo " value is now $number<br/>";

$number += 2;
echo " value is now $number <br/>";

$number -= 4;
echo "value is now $number <br/>";

$number *= 5;
echo "value is now $number <br/>";

$number /= 3;
echo "value is now $number <br/>";

$number ++;
echo "value is now $number <br/>";

$number --;
echo "value is now $number";

?>
<?php
//Question 5



$name = "harry";
var_dump($name);
echo "<br/>";
?>


<?php

$name = "harry";
echo($name);
echo "<br/>";
?>

<?php
$age = 28;
var_dump($age);
echo "<br/>";
 ?>

<?php
$name =null ;
var_dump($name);

 ?>

<?php
 // Quesion 6





$variable = "around";
echo 'What goes ' . $variable . ' comes ' . $variable . '.';

?>

<?php
//Question 7


$whatsit = "Alric";
echo "Value is ".gettype($whatsit).".<br/>";

$whatsit= 10.00;
echo "Value is ".gettype($whatsit).".<br/>";

$whatsit = true;
echo "Value is ".gettype($whatsit).".<br/>";

$whatsit = 8;
echo "Value is ".gettype($whatsit).".<br/>";

$whatsit = null;
echo "Value is ".gettype($whatsit).".<br/>";



 ?>

<?php
                                                 //PART 2

 // Question 1
 $month ="date('F', time())";
 if ($month == "August") {
  echo " It's August, so it's really hot.";

 } else {
  echo  " Not August, so at least not in the peak of the heat.";
 }


?>



<?php
// Question 2

$number = 0;
while ($number < 10){
  echo 'abc ';
  $number++;
}
?>

<?php
$number = 0;
do{
  echo 'xyz ';
  $number++;
} while ($number < 11) ;

?>


<?php

for ($p=1; $p<10; $p++){
  echo "$p";
}
?>


<?php

for ($p='A'; $p<'G'; $p++){
  echo "Item $p <br>";
  }

?>


<?php
// Question 3

for ($x=1; $x<=12; $x++){
  $sum = $x * $x;
  echo "$x * $x = $sum <br>";
}

?>


<?php
//Question 4

// IMPORTANT ASK ABOUT IT




echo "<table border=\"1\">";


for ($row=1; $row<=7; $row++){
  echo "<tr>\n";

  for ($col=1; $col<=7; $col++){

    $x=$col * $row;

    echo "<td>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";
?>

















 </body>
 </html>
