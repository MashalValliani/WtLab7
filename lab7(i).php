<!Doctype html>
<html>
<head>
</head>
<body>
  <?php
  // part A
/* task:1 Iterate the integers from 1 to 50. For multiples of three print "Star" instead of the number and
 for the multiples of five print "Struck". For numbers which are multiples of both three and five print "StarStruck" */
 for ($x = 1; $x <= 50; $x += 1) { 
 	switch ($x) { 
 		case $x % 15 == 0: 
 			$a = "StarStruck\n"; 
 			break; 
			 
		case $x % 5 == 0: 
 			$a = "Struck\n"; 
			break; 
			 
 		case $x % 3 == 0: 
 			$a = "star\n"; 
			break; 
 			 
 		default: 
 			$a = $x."\n"; 
	} 
 	echo $a;
 	echo "</br>";

 }   
echo "</br>";
/* task:2 Create a PHP variable $d = 'A00'. Using this variable print the following numbers. 
A01                                                         
A02                                                         
A03                                                         
A04                                                         
A05 */

$d = 'A00';
  for ($n=0; $n<5; $n++)
{
echo ++$d ."\n";
echo "</br>";
}
echo "</br>";
/* task:3 Store any number with two digits or above in a PHP variable and calculate its sum. 
If the sum is equal to your roll number, output a statement that prints “It’s your lucky day today.” 
Use if-elseif decision statement with the colon (:) syntax. */
$num="9191919191919191919191919191918";
$sum=0;
for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
   if ($sum=="158"){
   echo	"It’s your lucky day today.";
   } 
   else 
   echo $sum;
    
     echo "</br>";
     echo "</br>";

/* task:4 Store any name in a PHP variable and then loop through it printing the name of a thing 
(similar to alphabet books) corresponding to each letter of the name. For example:

Name: Saad
Output: Stairs Apple Apple Duck
 */
$name="SURAJ";
echo "Name:".$name;
echo "<br>";
echo "Output:";
for($i=0; $i<strlen($name); $i++){
	switch ($name[$i]) {
	 	case 'S':
	 		Echo "Sun"." ";
	 		break;
	 	case 'U':
	 	    echo "Umbrella"." ";
	 	    break;
	 	case 'R':
	 	    echo "Red"." ";
	 	    break;
	 	case 'A':
	 	    echo "Apple"." ";
	 	    break;
	 	case 'J':
	 	    echo "Juice"." ";
	 	    break;
	 	
	 	default:
	 		echo "not working";
	 		break;
	 }
}
echo"</br>";
/* task:5 Use labels to identify loops that print even and odd numbers respectively. 
First print even numbers till 10 and then use goto statement to jump to the loop that prints odd numbers till 9.  */

	even:
	echo "Even numbers between 1 to 10 ";
	echo "</br>";
    for ($j=1; $j<=10; $j++){
        if( $j%2==0){
        echo $j;
        echo "</br>";
        }
    }
	echo "</br>";
	goto odd;

	odd:
echo "Odd numbers between 1 to 10 ";
echo "</br>";
    for ($j=1; $j<=10; $j++){
        if( $j%2!=0){
        echo $j;
        echo "</br>";
        }
    }

    echo "</br>";
/* task:6 Output the  multiplication table using loops */
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 7; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 7; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
  ?>
</body>
</html>