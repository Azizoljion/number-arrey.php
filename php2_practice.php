<?php 

$number =10;
$number2 =1.3;

echo $x =(1+11)-3**3/3;
echo "<br>";
// $number ++;
// echo $number;
// echo $number ++; show korbena/ age ++ dile korbe
echo ++$number;
echo "<br>";
$count=20;

// echo $total=$count + 20;
// echo $count +=20;same vabe gun ba vag korte caile *= and /= likhbo
// echo floor($number2);dosomic number ke dosomic chara dekhay
// echo ceil($number2);dosomic thakle 1 + kore dekhay
echo pi();
echo "<br>"; 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>php number and arrey</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<h2>arrey</h2>
 	<?php 

 	/*$name="Azizol Jion";
 	$city="Dhaka";
 	$from="Narsingdi";*/

 	// $array=array("Azizol Jion","Dhaka","Narsingdi");eivabe ba nicer vabe doi vabei kora jay

 	// echo $array[0];
 	// echo "<br>";

 	$array=["Azizol jion","Dhaka","Narsingdi"];
 	$array2=["kustia","Mongubd","python"];

 	echo $array[0];
 	echo "<br>";
 	$array[1]="pabna";
 	// array er value change kora jay
 	$array[]="php";
 	// array te noton value asign korte hole evabe
 	array_push($array, "wp");
 	// array er sheshe kono value add korte caile
 	echo "<pre>";
 	// print_r er age <pre> dile aro sondor kore serially dekhay
 	$newarray=array_merge($array,$array2);
 	// print_r($array);
 	// array er sob data print_r er maddome dekhay
 	echo "<br>";
 	// print_r($array2);
 	print_r($newarray);
 	// eigula chilo index based array



$associativearray=array(
	'name' => 'Jion',
	'city' => 'Dhaka',
	'likes' => 'php');

echo $associativearray['city'];

/*loop*/

echo "<br>";

for($i=1; $i <100; $i++) {

	echo $i . "<br>";
}


 	 ?>
 </body>
 </html>