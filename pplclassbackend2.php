<?php
$link = mysqli_connect("localhost","root","", "gobumpr");
session_start();
$city1=$_SESSION['city1'];
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	
	$sql = "SELECT * FROM res_name WHERE name='$name'";
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			
			
			
			while($row = mysqli_fetch_array($result)){
				$x=$row['rid'];
				
				$c=mysqli_query($link,"select rcid,rid from res_city where rid='$x' and city='$city1'");
				while($re=mysqli_fetch_array($c))
				{
					$rcid1=$re['rcid'];
					$rid1=$re['rid'];

				$e=mysqli_query($link,"select image from restaurants where rcid='$rcid1'");
				while($re1=mysqli_fetch_array($e))
				{
  				$image=$re1['image'];
				}
				$e=mysqli_query($link,"select name from res_name where rid='$rid1'");
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
				$d=mysqli_query($link,"select * from restaurants where rcid='$rcid1'");
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
			<?php



			}
			
            // Close result set
			mysqli_free_result($result);
		} else{
			echo "<p>No matches found</p>";
		}  
	}
	
}
//................................................................................

mysqli_close($link);
?>