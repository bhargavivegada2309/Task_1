<?php
#index array
$student=array("abc","def","ghi","xyz","pqr","jkl",20,15,27,24);
print_r($student);
foreach($student as $mytemp)
{
	echo $mytemp;
	echo "<br>";
}

#associative array
$student_details=array("name"=>"Bhargavi","department"=>"bca","div"=>"b2","rollno"=>51,"city"=>"rajkot","number"=>12345678790,"country"=>"india","state"=>"gujarat","university"=>"atmiya","address"=>"panchayat chok",);
foreach($student_details as $std)
{
	echo $std;
	echo "<br>";
}

#multidimensional array
$student_master=array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,20,30),array(40,50,60),
array(70,80,90),array(11,22,33),array(44,55,66));
foreach($student_master as $row)
{
	foreach($row as $value)
	{ 
		echo $value;
	}
	echo "<br>";
}
?>