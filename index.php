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
              <a href="#LoginModal" data-toggle="modal"  class="nav-link" >Log in</a>
            </li>
            <li class="nav-item">
              <a href="#RegModal" data-toggle="modal"  class="nav-link" >Register</a>
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
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">
              
            </p>




          </div>
        </div>
      </div>
    </header>
    <div >
      <?php
//$con=mysql_connect("localhost","root","","ritsoft2");

?>
</div>

      <?php
              include("new1.php");
//$con=mysql_connect("localhost","root","","ritsoft2");

?>
    </div>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Gobumpr is a restaurant search and discovery service founded in 2008 by Indian entrepreneurs Deepinder Goyal and Pankaj Chaddah. It currently operates in 23 countries, including Australia and United States.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    
      <div class="container">
        <div class="row">
          

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            
          </div>
        </div>
        <div class="row col-lg-12" >
          <div class="col-lg-6 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>8113905955</p>
          </div>
          <div class="col-lg-6 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@gobumpr.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>


    <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- login Modal content-->
      <div class="modal-content col-lg-6">
        <div class="modal-header">
            <h4 class="modal-title" style="font-weight:700;">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="form1" name="form1" class="form-horizontal" method="post" action="logincheck.php">
          Username (Mobile):
          <label for="username"></label>
          <input type="text" class="form-control" name="username" id="username" required value=""/>
          Password:
          <label for="pasword"></label>
          <input class="form-control" type="password" name="pasword" id="pasword" required value=""/>
          <div class="btn">
          <input type="submit" name="log_btn" id="log_btn" class="btn btn-info" align="middle" value="LOGIN"/>
          <a href="user/userregistration.php" class=""><font color="white">New user</font></a>
          </div>
          </form>          </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
    </div>
     



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
     







      <!-- login Modal-->
    <div class="modal fade" id="RegModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- login Modal content-->
      <div class="modal-content col-lg-6">
        <div class="modal-header">
            <h4 class="modal-title" style="font-weight:700;">Register Now</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          

          <form class="form-horizontal" id="userreg" name="userreg" method="post" onsubmit="return saveclick()" action="#">
      Mobile No:                           
      <label for="mobile"></label>
      <input class="form-control" type="text" name="mobile" id="mobile" required value=""/>
        Name:                         
      <label for="name"></label>
      
      <input class="form-control"  type="text" name="name" id="name"  required value=""/>
        City you belong:                         
      <label for="city"></label>
      <select class="form-control" name="city">
        <option value="BANGALURU">BANGALURU</option>
        <option value="CHENNAI">CHENNAI</option>
        <option value="OTHER">OTHER</option>
      </select>
        Email-id
      :                         
      <label for="username"></label>
      <input  class="form-control" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="username" id="username" required value=""/>
      
      Create a password  
      :
      <label for="password"></label>
      <input class="form-control" type="password" name="password" id="password" pattern="[a-zA-Z0-9@\s]+" required value=""/>



      Confirm your password  
      :
      <label for="repasword"></label>
      <input class="form-control" type="password" name="repassword" id="repassword" pattern="[a-zA-Z0-9@\s]+" required value=""/>
       
    
      <div class="btn">
    <input type="submit" name="reg_btn" id="reg_btn" align="middle" value="SUBMIT" class="btn btn-info"/>
    </div>
    </form> 



<?php
include("connection.php");
if(isset($_POST["reg_btn"])!=null)
{
  $mobile=$_POST["mobile"];
  $name=$_POST["name"];
  $city=$_POST["city"];
  $username=$_POST["username"];
  $password=$_POST["password"];  
    $x=0;


 $rst=mysql_query("select username from user_details");
while($dat=mysql_fetch_array($rst))
{   
$cmobile=$dat["username"];
if($cmobile==$mobile)
{
  $x=1;

}
}
if($x==1)
{
?>

  <script type="text/javascript">
  alert("Already registered with this mobile number");
  </script>
<?php
//echo " Already registered with this register number";
?>
<?php
}
else
{
  $b=0000;
  mysql_query("insert into user_details(username,name,city,email,password) values('".$mobile."','".$name."','".$city."','".$username."','".$password ."')")or die(mysql_error());
  mysql_query("insert into login(username,password) values('".$mobile."','".$password ."')")or die(mysql_error());
  mysql_query("insert into individual_cbno(user,billno) values('".$mobile."','".$b."')")or die(mysql_error());?>
  <script type="text/javascript">
  alert("registration completed");
  </script>
  <?php
}
}
?>



        </div>
        <div class="modal-footer">
        </div>
      </div>

<div>
</div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script type="text/javascript">
  
  function saveclick()
{
  
var a=document.getElementById('password').value;
var b=document.getElementById('repassword').value;
console.log(a);
console.log(b);
if(a!=b)
{
alert("These passwords don't match. Try again?");
return false;
}
else
return true;
}
</script>

  </body>

</html>
