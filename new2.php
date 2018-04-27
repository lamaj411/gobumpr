<?php
//$con=mysql_connect("localhost","root","","ritsoft2");
include("connection.php");
if(isset($_POST['btnshow']))
{
	
   
	$a=explode(",",$_POST['class']);
	$b=$_POST['sub'];
	echo $a; echo $b;


	//$res=mysqli_query($con,"SELECT a.adm_no,b.name,c.rollno,d.sessional_marks FROM stud_sem_registration a,stud_details b,current_class c,sessional_marks d where a.classid='$a[0]' and a.new_seum='$a[2]' and a.adm_no=b.admissionno and a.classid=c.classid and a.adm_no=c.studid and d.subjectid='$b' and d.studid=b.admissionno order by c.rollno asc");

	//$res=mysql_query("SELECT a.adm_no as adno,b.name,c.rollno FROM stud_sem_registration a,stud_details b,current_class c where a.classid='$a[0]' and a.new_sem='$a[2]' and a.adm_no=b.admissionno and a.classid=c.classid and a.adm_no=c.studid order by c.rollno asc");


	$c=mysql_query("select * from class_details where classid='$a'");

while($res=mysql_fetch_array($c))
{
	$classid=$res['classid'];
	echo $classid;
}
}
?>