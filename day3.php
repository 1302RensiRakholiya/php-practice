<!-- form -->
<form method="POST">
    Name: <input type="text" name="name" ><br>
    Age:<input type="number" name="age" ><br>
    <button type="submit" name="submit1" >Submit</button>
</form>
<?php
if (isset($_POST["submit1"])){
    $name= $_POST["name"];
    $age= $_POST["age"];
    echo "<br> Hello! ".$name;
    echo "<br> your age is ".$age;

    if ($age >=18){
        echo "<br>Adult";
        
    }
    else{
        echo "<br>Minor";
    }
}
echo "<hr>";
?>
<!-- marks form -->
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Mark1:<input type="number" name="mark1" ><br>
    Mark2:<input type="number" name="mark2" ><br>
    Marks3:<input type="number" name="mark3" ><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
    if(isset($_POST["submit"])){
        $name= $_POST["name"];
        $mark1=$_POST["mark1"];
        $mark2=$_POST["mark2"];
        $mark3= $_POST["mark3"];

        echo "<br> Name: ".$name;
        echo "<br> Marks:".$mark1."-".$mark2."-".$mark3;
        $total=$mark1+$mark2+$mark3;
        echo "<br> Total: ".$total;
        $percentage= $total/3;
        echo "<br> Percentage:".$percentage;
        if($percentage >= 40){
            echo "<br>Pass";
        }
        else{
            echo "<br>Fail";
        }
    }


?>
