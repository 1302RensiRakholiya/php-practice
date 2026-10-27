<!-- array  -->
 <?php
 $marks=[26,39,50];
  echo "marks:".$marks[0];
  echo "<br>".$marks[2];
  echo "<br>".$marks[1];
  echo "<hr>";
  ?>
  <!--foeach loop -->
   <?php
   $marks=[75,90,85];
   foreach($marks as $m){
    echo "<br>Marks :".$m;

   }
   echo "<hr>";
   ?>
   <!-- store total of marks -->
    <?php
    $total=0;
    foreach($marks as $m){
        $total=$total +$m;

    }
    echo "Total:" .$total;
    echo "<br> Percentage:".$total/count($marks);
    echo "<hr>";
    ?>
    <!-- array with key=>value -->
    <?php
    $result=["DAA"=>89,"SSAE"=>90,"DM"=>95,"WAD"=>78];
    foreach($result as $subject=>$marks){
        echo "<br>$subject:$marks";
    }
    echo "<hr>"
    ?>
    <!-- for loop -->
    <?php
    for($i=1; $i<=10;$i++){
        echo "<br>Number:".$i;
    }
    echo "<hr>";
    ?>
    <!-- multiplication table -->
    <?php
    $n=5;
    $t=0;
    for($i=1;$i<=10;$i++){
        echo "<br>$n*$i =". ($n *$i);
    }
    echo "<hr>";
    ?>
    <!-- final code for day2 -->
    <?php
    $total=0;
    $result=["WAD"=>89,"DAA"=>67,"SSAE"=>78];
    foreach($result as $subject=>$marks){
        echo "<br>$subject:$marks";
        $total=$total +$marks;
        }
    echo "<br> total marks:".$total;
    $percentage= $total/count($result);
    echo "<br> Percentage:".$percentage;
    if($percentage >=40){
        echo "<br>PASS";
    }
    else{
        echo "<br>FAIL";
    }
    
    ?>
        
