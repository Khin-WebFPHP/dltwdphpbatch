<?php

$arr=["one","two", "three","four","five"];//Manual Array
$name=[];//declear
$name[0]="Maung";
$name[1]="Aung";
$name[2]="Ko";
$name[3]="Zaw";
$name[4]="Mya";
echo $name[4];
echo "<hr/>";
$arr=["name"=>"Maung", "age"=>"25"];//associated arrary
$color=[];
$color["one"]="red";
$color["two"]="blue";
$color["three"]="black";
$color["four"]="white";
$color  ["five"]="greem";
echo $color["two"];
echo "<hr/>";
$arr=[
    ["name"=>"Maung Maung","age"=>"20"],
    ["name"=>"Su Su","age"=>"30"]
];
$x=[];
$x[0]["name"]="Aung Aung";
$x[0]["age"]="20";
$x[1]["name"]="Su Su";
$x[2]["age"]="30";
echo $x[0]["name"];
?>