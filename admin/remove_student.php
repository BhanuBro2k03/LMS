<?php
require('dbconn.php');

$rollno=$_GET['RollNo'];

$sql="delete from LMS.user where RollNo='$rollno' ";

if($conn->query($sql) === TRUE)
{
	$sql1="insert into LMS.message (RollNo,Msg,Date,Time) values ('$rollno','Student removed!',curdate(),curtime())";
    $result=$conn->query($sql1);
echo "<script type='text/javascript'>alert('Success Removed')</script>";
header( "Refresh:0.01; url=student.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=student.php", true, 303);

}


?>