<?php
//function
//function functionname(){

//}
// simple function
    function myfun(){
        echo "my name is function";
    }
myfun();

echo "<hr/>";
function hellocal(){
    $num1=100;
    $num2=10;
    $cal=($num1/$num2)+(5*3);
    echo $cal;
}
hellocal();
echo "<hr/>";
//parmeter passing to function

function singleparameter($name){
    echo "My name is {$name}";

}
singleparameter("Khin Khin");
echo "<hr/>";
function multiparameter($name,$age){
    echo "My name is {$name}. my age is {$age}";
}
multiparameter("Mya Mya",30);
echo "<hr/>";
function multical($val1,$val2,$val3){
    $cal=($val1+$val2)*$val3;
    echo $cal;
}
multical(10,20,2);
echo "<hr/>";
//default parameter
function defaultparameter($name="Mya Mya"){
  echo "My name is {$name}";
}
defaultparameter();
echo "<hr/>";
function defaultpp($num1=20,$num2=10,$num3=2){
    $cal=($num1+$num2)/$num3;
    echo $cal;
}
defaultpp(40,20);
echo "<hr/>";
//return value
//simple fuction
function  simplereturn(){
    return "My name is retrun function";
}
echo simplereturn();
echo "<hr/>";
//parameter fuction
function siglereturn($num1){
    $cal=$num1+200;
    return $cal;
}
/*function abc(){
    $val=10;
    simplereturn(10)+$val;
}this is Java type function for explain*/
echo siglereturn(40);
echo "<hr/>";
function multireturn($num1,$num2,$num3){
    $cal=($num2+$num3)*$num1;
    return $cal;// can call return $num1 only
}
echo multireturn(10,20,30);
echo "<hr/>";
//dynamic function call
$val="morning";
echo $val;
echo "<br/>";
function greeting(){
    return "Ha we just accept only numric";
}
function morning(){
    return "hay i am morning";
}
echo greeting();
echo "<br/>";
echo $val;
echo "<br/>";
echo $val();
echo "<hr/>";
$num1="doit";
function doit(){
    return "We love may su";
}
echo "<hr/>";
if(function_exists($num1)){
echo "Yes, your variable had used in function";
}else{echo "No,your variable is not in function";

}
?>