<?php
      include("usersession.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoBumbr</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">GoBumbr</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="logout.php" class="nav-link" >Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>















    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-uppercase">
              <strong>Find the best restaurants in India</strong>
            </h2>


          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">
              
            </p>




          </div>
        </div>
      </div>
    </header>
    <div>
      <?php
      $uname=$_SESSION["user"];
      if(isset($_POST["quantity"]))
      {
      $qn=$_POST["quantity"];
    }
$con=mysqli_connect("localhost","root","","gobumpr");


if(isset($_GET['id1']) && isset($_GET['id2']))
{
$id1=$_GET['id1'];
$id2=$_GET['id2'];
$c=mysqli_query($con,"select rcid,rid from res_city where rid='$id1'");
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
<div class="row ">
<div style="padding-top: 20px; padding-left: 20px;"  >
    <img src="<?php echo $image;?>" width="300px;" height="300px;" style="border-radius:60%;">
	</div>
	<div class="col-lg-6 panel-info" style="border-style: solid; border-left: hidden; border-bottom: hidden; border-top: hidden;">
	<table class=""><?php  
$d=mysqli_query($con,"select * from restaurants where rcid='$rcid1'");
while($res=mysqli_fetch_array($d))
{
?>
<tr><br><font color="#F05F40" size="4px"><?php echo $name;?></font></tr>
<tr><td><font color=""; size="3px;"><?php echo $res['address'];?></font></td></tr>
 <tr><td><font color=""; size="3px;">Mobile:<?php echo $res['mobile'];?></font></td></tr>
</td></tr>
</font>

</table>
<table class="table"> 
  <tr>
  <th>Dish </th>
  <th>Unit price </th>
  <th>Select Quantity</th>
  <th>Place order</th>

  
  </tr> 
<?php
$c=mysqli_query($con,"select * from menu");
while($res=mysqli_fetch_array($c))
{
  ?>

<tr><td><?php echo $res['dish'];?></td>
 <td><?php echo $res['price'];?></td>
 <td>
   <select onchange="setid(this.value)"id="q">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
 </td>
 
<td><a href="moredetails.php?id1=<?php echo $id1;?>&id2=<?php echo $id2;?>&dish=<?php echo $res['dish'];?>&price=<?php echo $res['price'];?>"  class="nav-link" >Add now</a>
</td>
</td></tr>
<?php
}
?>
</table>
</div>
<br>
<?php
}
}
}
$result1=mysqli_query($con,"select billno from individual_cbno where user='$uname'");
while($dat1=mysqli_fetch_array($result1))
{   
$billno=$dat1["billno"];
}
?><div class="col-lg-2">

<?php
if(isset($_GET['id1']) && isset($_GET['id2']) && isset($_GET['dish']) && isset($_GET['price']))
{
$id1=$_GET['id1'];
$id2=$_GET['id2'];
$odish=$_GET['dish'];
$oprice=$_GET['price'];

$quantity = $_COOKIE['regid'];

?>


<table class="table"> 
  <tr><br></tr>
  <a class="btn btn-info">Order Details</a>
  <tr><th><font color="red">Bill no</font></th><th>:<?php echo $billno;?></th></tr>

  <tr>
  <th>Dish </th>
  <th>Price </th>
  <th>Qty </th>
  <th>Total </th>


</tr>


<?php
$result =mysqli_query($con,"SELECT * FROM order_details where billno='$billno' and dish='$odish' and rcid='$id2'");
$dat1=mysqli_fetch_array($result);
if ($dat1>0)
    {

     mysqli_query($con,"UPDATE order_details SET quantity='$quantity' where billno='$billno' and dish='$odish' and rcid='$id2'");
    }
else{
mysqli_query($con,"INSERT INTO order_details (rid,rcid,billno,dish,quantity,price)values('".$id1."','".$id2."','".$billno."','".$odish."','".$quantity."','".$oprice."')")or die(mysqli_error());
}

$gtotal=0;

$result1=mysqli_query($con,"select dish,price,quantity from order_details where billno='$billno'");
while($dat1=mysqli_fetch_array($result1))
{   
$dishh=$dat1["dish"];
$pricee=$dat1["price"];
$quantity=$dat1["quantity"];
?>
<tr>
  <td><?php echo $dishh;?></td>
  <td><?php echo $pricee;?></td>
    <td><?php echo $quantity;?></td>
    <td><?php echo $total=$pricee * $quantity; $gtotal=$gtotal+$total;?></td>



</tr>
<?php
}
?>
<tr><th>Grant total</th><th><?php echo $gtotal;

$result =mysqli_query($con,"SELECT * FROM payment where billno='$billno'");
$dat1=mysqli_fetch_array($result);
if ($dat1>0)
    {

     mysqli_query($con,"UPDATE payment SET gtotal='$gtotal' WHERE billno='$billno'");
    }
    else
    {
mysqli_query($con,"INSERT INTO payment (user,rcid,billno,gtotal)values('".$uname."','".$id2."','".$billno."','".$gtotal."')")or die(mysqli_error());
}

?>
  </tr>
</table>
<a href="userhome.php"   class="btn btn-success" >Pay Now</a>

    </div>
<?php
}
?>
    <div class="modal fade" id="MenuModal" role="dialog">
    <div class="modal-dialog modal-lg-5">
    
      <!-- login Modal content-->
      <div class="modal-content col-lg-12">
        <div class="modal-header">
            <h4 class="modal-title" style="font-weight:700;">Menu</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

<div class="row well">
  <div class="col-lg-12">
  <table class="table"> 
  <tr>
  <th>Dish </th>
  <th>Unit price </th>
  
  </tr> 
<?php
$c=mysql_query("select * from menu");
while($res=mysql_fetch_array($c))
{
  ?>

<tr><td><?php echo $res['dish'];?></td>
 <td><?php echo $res['price'];?></td>
</td></tr>
<?php
}
?>
</table>
</div>
</div>
<br>
          
          </div>
          </form>
          </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
    </div>
  </body>

</html>



<script type="text/javascript">
    
    function setid(a)
    {
        console.log(a);
       document.cookie="regid="+ a;
    }
    function setidonload(a)
    {
        console.log(a);
       document.cookie="regid="+ a;
    }
</script>