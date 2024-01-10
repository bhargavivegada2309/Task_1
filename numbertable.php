<?php
echo"<table border=1>";
for($i=1;$i<=10;$i++)
{
	$a=2*$i;
	$b=3*$i;
	$c=4*$i;
	$d=5*$i;
echo"<tr> <td>1</td> <td>*</td> <td>$i</td>  <td>=</td> <td>$i</td> 
	 <td>2</td> <td>*</td> <td>$i</td>  <td>=</td> <td>$a</td>
	 <td>3</td> <td>*</td> <td>$i</td>  <td>=</td> <td>$b</td>
	 <td>4</td> <td>*</td> <td>$i</td>  <td>=</td> <td>$c</td>
	 <td>5</td> <td>*</td> <td>$i</td>  <td>=</td> <td>$d</td> </tr>";
}
echo"<table>";
?>