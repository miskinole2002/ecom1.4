<?php
$server ='localhost';
$userName="root";
$pwd="";
$db="ecom1";
$conn= mysqli_connect($server,$userName,$pwd,$db);
if($conn){
    echo"connected to $db database successfully";
    global $conn;
    
}else{
    echo"Error : not connected to the $db database";
}
//recuperer une ligne dans une table
$result1=mysqli_query($conn,"select * from user where id=2");

//avec fetch row : tableau indexe =permet de recuperer dans un tableau indexe les donnees 
$data1=mysqli_fetch_row($result1);

echo"<br>";
echo"<br>";
echo"premier fetch";
echo"<br>";
echo"<br>";
echo"<br>";
var_dump($result1);
echo"<br>";
echo"<br>";
var_dump($data1);
echo"<br>";
echo"<br>";

$result2=mysqli_query($conn,"select * from user where id=1");
//avec fetch assoc tableau associatif

$data2=mysqli_fetch_row($result2);
echo"<br>";
echo"<br>";
echo"<br>";
echo"second fetch";
echo"<br>";
echo"<br>";
echo"<br>";
var_dump($result2);
echo"<br>";
echo"<br>";
var_dump($data2);

echo"<br>";


$result3=mysqli_query($conn,"select user_name, email, id from user where id=1");

$data3=mysqli_fetch_row($result3);
echo"<br>";
echo"<br>";
echo"<br>";
echo"troixieme fetch";
echo"<br>";
echo"<br>";
echo"<br>";
var_dump($result3);
echo"<br>";
echo"<br>";
var_dump($data3);









?>