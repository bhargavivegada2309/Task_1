<?php
#index array
$student=array("abc","def","ghi","xyz","pqr",30,40,50,60,70);
print_r($student);
foreach($student as $mytemp)
{
  echo $mytemp;
  echo"<br>";  
}
#associative array
$student_details=array("name"=>"priya","department"=>"bca","rollno"=>28,"city"=>"rajkot","number"=>1234567890,"country"=>"india","state"=>"gujrat","university"=>"atmiya","address"=>"university road");
foreach ($student_details as $std)
{
	 echo $std;
	 echo"<br>";
}
#multidimensional array
$student_master=array(array(1,2,3,)array(4,5,6),array(7,8,9),array(10,11,12),array(13,14,15),array(16,17,18),array(19,20,21),array(22,23,24));
foreach($student_master as $row)
{
	  foreach($row as$value)
	  {
		  echo $value;
	  }
	  echo"<br>";
?>