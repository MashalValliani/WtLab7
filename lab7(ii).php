<!Doctype html>
<html>
<head>
</head>
<body>
  <?php
  	//part B
  	/* task:1 $arr = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  	 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
  	 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
  	 "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
  	  "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
Display the capital and country name from the above array $arr. Sort the list by the capital of the country.
 */
	$arr = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
	asort($arr);
	//$keys = array_keys($arr);
	//print_r($keys);
foreach($arr as $x => $value) {
	echo "The Capital of ".$x." is ".$value ;
	echo"</br>";
}
echo "</br>";
echo "</br>";
	/* Task:2 Create a numeric array, increase the size of the array by inserting two new special 
	characters ($,*,@ or any other) into it at any given positions, remove the first element of the array, print the final result. */
	
	//Creating an array of numbers
		$numeric_array=array(1,2,3,4,5);
		$len=count($numeric_array);
		echo "Orignal Array:";
		for($j=0; $j<$len; $j++){
			echo $numeric_array[$j];
		}
		echo "</br>";
		//pushing special symbol
		array_push($numeric_array,'@','*'); 
		//Removing First Item
		array_shift($numeric_array);
		$length=count($numeric_array);
		//iterating array after  pushing
		echo "Array After Inserting and Removig First Item:";
		for($i=0; $i<$length; $i++){
			echo $numeric_array[$i];
		}
echo "</br>";
echo "</br>";
/* Task:3 Displays all the numbers between 200 and 250 that are divisible by 4 without using any control structure. (Hint: make use of the range() function). */
	$sample=range(200,250,4);
$len=count($sample);
echo "Number Between 200 and 250 That are divisible by 4 are:";
for($i=0; $i<$len; $i++){
	echo $sample[$i]." ";
}
echo "</br>";
echo "</br>";
	/* Task:4 Remove any duplicate values from two numeric arrays containing numbers and strings respectively. (Hint: make use of array_unique() function). */
	
echo "First Array:";
$numeric_array=array("a"=>"suraj","b"=>"sajjad","c"=>"sagar","d"=>"sajjad",3,4,3,5,5,6,7,4);
print_r(array_unique($numeric_array));
echo "<br>";
echo "Second Array:";
$numeric_array=array(10,22,20,10,5,5,6,7,4,"a"=>"sajjad","b"=>"sajjad","c"=>"sagar","d"=>"sagar");
print_r(array_unique($numeric_array));
echo "</br>";
echo "</br>";
	/* Task:5 Write a PHP script to print "First", “White” and 2 from the following multi-dimensional array. 

Sample Data: 
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),"numbers" => array ( 1, 2, 3, 4, 5, 6 ),"holes" => array ( "First", 5 => "Second", "Third"));
 */
$color=array("colors"=>array("a"=>"red","b"=>"green","c"=>"White"),"numbers"=>array(1,2,3,4,5,6),"holes"=>array("First",5=>"Second","Third"));
echo $color['colors']['c']."</br>";
echo $color['numbers'][1]."</br>";
echo $color['holes'][0];
	echo "</br>";
	echo "</br>";
	/* Task:6 Sort the following associative array:
array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
 */
$arr=array("Samreen"=>"31","Jahan"=>"41","Warsha"=>"39","Rania"=>"40");
asort($arr);
echo "Sorting in Assending order in terms of Value.<br>";
foreach ($arr as $x => $x_value) {
	echo "Key: ".$x.",Value:".$x_value;
	echo "</br>";
}

echo "</br>";
echo "</br>";
ksort($arr);
echo "Sorting in Assending order in terms of Key.<br>";
foreach ($arr as $x => $x_value) {
	echo "Key: ".$x.",Value:".$x_value;
	echo "</br>";
}
echo "</br>";
echo "</br>";
$array_decend=array("Samreen"=>"31","Jahan"=>"41","Warsha"=>"39","Rania"=>"40");
rsort($array_decend);
echo "Sorting in Decending order in terms of Value.<br>";
foreach ($arr as $y => $y_value) {
	echo "Key: ".$y.",Value:".$y_value;
	echo "</br>";
}
echo "</br>";
echo "</br>";
krsort($arr);
echo "Sorting in Decending order in terms of Key.<br>";
foreach ($arr as $y => $y_value) {
	echo "Key: ".$y.",Value:".$y_value;
	echo "</br>";
}
	echo "</br>";
	echo "</br>";
	/* Task:7 Generate unique random numbers within a range of (1-200) and store them in an array. Search for your roll number in the generated array and print “Found you” if the roll number exists in it. */
	
	$random_one=rand(1,200);
$random_two=rand(1,200);
$random_three=rand(1,200);
$random_four=rand(1,200);
$random_array=array($random_one,$random_two,$random_three,$random_four);
$len=count($random_array);
for($i=0; $i<$len; $i++){
	if($random_array[$i]==18 || $random_array[$i]==158 || $random_array[$i]==74 || $random_array[$i]==162 || $random_array[$i]==182 ){
		echo "Yup!!!!!Found You";
		break;
	}
	else{
		echo "Not Found";
		break;
	}
}

   ?>
</body>
</html>