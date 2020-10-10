<?php
$val="blue";
$vbl=$val;
echo $vbl;// asb val
echo "<hr/>";
if($val=="red"){
    # using rf variable
    echo "my fav color is red";
}else {echo "your fav color is not red";
 }
 echo "<hr/>";
 if($val=="red"){
     echo "my fav color is red"."/"."input value is"." ". $val;
 }else{
     echo "my fav color is red"."/"."but input value is"." ". $val;
 }
 echo "<hr/>";
 /*this is comment line1
 this is comment line2
 */

 if($val=="red"){
echo "value color is" . $val;
 }else if($val=="white"){
echo "value color is" . $val;
 }else{
echo "your color is"." ". $val;
 }
 echo"<hr/>";
 //Logical Operator
 $num1=16;
 $num2=20;
 $num3=0;
 if($num1>$num2||$num1>$num3){
echo "true";
 }else{
     echo"false";
 }
 echo"<hr/>";
 if($num1>$num2 && $num1>$num3){
echo "true";
 }else{
echo "false";
 }
 echo"<hr/>";
switch ($num1) {
    case "10":
        echo "input value is".$num1;
        break;
    case "20":
        echo "input value is" .$num1;
    default:
        echo "input value is not 10 and 20"."value is". $num1;
        
}



?>