<?php
//$con=mysqli_connect("localhost","root","","ritsoft2");
include("connection.php");
//session_start();
//$uname=$_SESSION['fid'];
//$uname=$_SESSION['fid'];


?>

<script>
function showsub(str)
{
var xmlhttp;
if (window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.open("GET","getsub.php?id="+str,true);
xmlhttp.send();

xmlhttp.onreadystatechange=function() 
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("sub").innerHTML=xmlhttp.responseText;

}
}
}
</script>



<div class="map_contact">
	<div class="container">
		<br>
		<br>
		<br>
		<div class="contact-grids" align="center">
			
			<div class="col-lg-12 contact-grid" style="text-align:center">
				<form method="post" enctype="multipart/form-data" action="index.php">
					 <table  align="center" class="col-lg-12" style="cellspacing:2px;">
<tbody>
	<tr><td><center>Select your city</center></td><td></td></tr>
<tr><td>  
<select name="city" class="form-control" onchange="showsub(this.value)" id="city">

<?php
$c=mysql_query("select distinct(city) from res_city");

while($res=mysql_fetch_array($c))
{
	$classid=$res[city];
	echo $classid;
?>
<option value="<?php echo $res['city'];?>">
<?php echo $res['city']; ?></option>
<?php
}
?>
</select>
</td><td><div class="search-box">
					<input class="form-control" type="text" autocomplete="off"  id="name" name="name" placeholder="Search Restaurants "/>
                    <div class="result"></div>
                    </div></td></tr>

<tr><td>

</td></tr><tr></tr>
<form name="form1" method="post">

  
		
		
		
		

    <tr>
   
 </tr>
</div>
</table>
</div>
                   <?php include("pplclasssearch.php");?>

    
 <div name="details" id="details" class="row col-lg-12">

<?php
$con=mysqli_connect("localhost","root","","gobumpr");

$c=mysqli_query($con,"select rcid,rid from res_city where city='BANGALURU'");
while($re=mysqli_fetch_array($c))
{
$rid1=$re['rid'];
$rcid1=$re['rcid'];
$e=mysqli_query($con,"select image from restaurants where rcid='$rcid1'");
while($re1=mysqli_fetch_array($e))
{
  $image=$re1['image'];
}
$e=mysqli_query($con,"select name from res_name where rid='$rid1'");
while($re1=mysqli_fetch_array($e))
{
  $name=$re1['name'];
}

?>
<div class="row well col-lg-6">
	<div class="col-lg-6">
<img src="<?php echo $image;?>" width="250px;" height="250px;" style="border-radius:60%;">

	</div>
	<div class="col-lg-6"><table class="table">
	<?php  
$d=mysqli_query($con,"select * from restaurants where rcid='$rcid1'");
while($res=mysqli_fetch_array($d))
{
?>

<tr><th><font color="#F05F40"><?php echo $name;?></font></th></tr>
<tr><<th><?php echo $res['address'];?></th></tr>
 <tr><th><?php echo $res['mobile'];?></th></tr>
</table >
<table class="table">
 <tr><th>
 	

 	<a href="#MenuModal"   class="nav-link" data-toggle="modal">Menu</a></th>
 	<?php
if(isset($_SESSION['user'])){?>
<th><a href="moredetails.php?id1=<?php echo $rid1;?>&id2=<?php echo $rcid1;?>"  class="nav-link" >Order</a></th>
 		<?php
 	} else
 	{?>
 		<th>
 		<a href="#LoginModal" data-toggle="modal"  class="nav-link" >Order</a>
 		</th>
 		<?php
 	}
 		?></tr>
</table>
</div>

<?php
}
?>
</div>
<br>
<?php
}
?>

</div>






          
<!--<tr><td><!--<input type="submit" name="btnsave" value="save"  /> --> 


				</form>
				<div id="sub" class="row col-lg-12">

</div> 
			</div>
		
		</div>
		
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $("#details").hide();
    });
    $("select").change(function(){
        $("#student-details").hide();
    });
    $("input").change(function(){
        $("#details").hide();
    });
    $("input").change(function(){
        $("#student-details").show();
    });
    $("input").change(function(){
        $("#sub").hide();
    });
    $("select").change(function(){
        $("#sub").show();
    });
});
</script>