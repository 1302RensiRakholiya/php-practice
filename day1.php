 <!-- 1.hello -->
<?php
echo "hello! good evening.";
echo "<hr>";
?>

<!-- 2.store variable -->
<?php
$name = "jones";
echo "<br>My name is $name";
echo "<hr>";
?>

<!-- 3.lets do some maths-->
 <?php
 $a=10;
 $b= 5;

 echo "<br>addition is:".$a+$b; 
 echo "<br>substraction is:". $a-$b;
 echo  "<br>multiplication is : ".$a*$b;
 echo  "<br>division is: ".$a/$b;
echo "<hr>";
 ?>

<!-- 4.if else small program -->
<?php
$marks=70;
if ($marks >50){
    echo "pass";
}
else{
    echo "fail";
}
echo "<hr>";
?>
<!-- short programm  -->
<?php
$name="vivan";
$m1=20;
$m2=19;
$m3=29;
echo "name:".$name;
echo "<br>marks:".$m1."-".$m2."-".$m3;
$total=$m1+$m2+$m3;
echo "<br>total of mark is:".$total;

$per=$total/3;
echo "<br>percentage :".$per;
if($per >= 40){
    echo "<br>pass";
}
else{
   echo "<br>Fail";
}
?>



