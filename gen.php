



<?php
$n=$_POST['team'];
$namef=$_POST['name'];
$a=0;
$b=0;
$k=1;



$ext = ".txt";
$filename = $namef.$ext;
$str = file_get_contents($_FILES["UploadFileName"]["tmp_name"]);
$my_array_data = json_decode($str, TRUE);


$i=count($my_array_data);
$q=count($my_array_data);
$t=count($my_array_data);
error_reporting(E_ERROR | E_PARSE);
if($n<=$i)
{


$file=fopen($filename,"w");

while(--$t)
{
	$o=rand(0,$t);
	$tempi=$my_array_data[$t];
	$tempj=$my_array_data[$o];     
	$my_array_data[$t]=$tempj;
	$my_array_data[$o]=$tempi;
}
while($i%$n!==-1)
	{
		fwrite($file,PHP_EOL);
		$m="Team";
		$m.=$k;
		fwrite($file,$m.PHP_EOL);
$b=$b+floor($i/$n);
$c=floor($i/$n);

for($j=$a;$j<$q;$j++)
{

if($j==$b)
	{
		$a=$b;
		break;
	}
	
	$message=$my_array_data[$j]['Name'];
	fwrite($file,$message.PHP_EOL);
	

	}

	$i=$i-$c;
	$n=$n-1;
	$k++;
	if($n==0)
	{
		break;
	}

}


fclose($file);
if($n==0)
{
	header('location:done.html');
}
}
else
{
	echo "<script type='text/javascript'>alert('Invalid data entered');</script>";
echo"Entered Number is greater than the team memebers";


}
?>



	

