<?php
//varialble scope
$val=30;// Global Variable
function variablescope(){
    $val=10;//Local Variable
    echo $val;
}
variablescope();
echo "<br/>";
echo $val;
//echo $num;local variable does not working in outside;
echo "<hr/>";
$x=50;
$y=100;
function vscope(){
    global $x;// to call global variable need to use 'global'
    global $y;
    $z=$x+$y;
    echo $z;
}
echo $x;
echo "<br/>";
vscope();
echo "<hr/>";
//Static Variable
function staticvariable(){
    STATIC $val=0;
    $val++;
    echo $val;
}
staticvariable();
echo "<hr/>";
staticvariable();
echo "<hr/>";
staticvariable();
echo "<hr/>";


$num=20;
$num2=50;
function myval(&$num){
    $num=40;
    echo $num;
}
echo "this is first value from global num {$num}";
echo "<br/>";
echo "this is first value from global num2 {$num2}";
echo "<br/>";
myval($num2);
echo "<br/>";
echo "this is second value from global num {$num}";
echo "<br/>";
echo "this is second value from global num2 {$num2}";
echo "<hr/>";


$abc=20;
function myval1(&$val){
    $val=40;
    echo $val;
}
echo "this is first value from global {$abc}";
echo "<br/>";
myval1($abc);
echo "<br/>";
echo "this is second value from global {$abc}";
?>