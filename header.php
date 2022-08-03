<?PHP include 'conect-to-db.php';?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo  $title ; ?> </title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
   <!--/banner-section-->
   <div id="demo-1" data-zs-src='["images/23.jpg", "images/24.jpg", "images/25.jpg","images/26.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			        <div class="inner-header-agile">	
				        <nav class="navbar navbar-default">
					        <div class="navbar-header">
						       <h1><a  href="index.php"><span>I</span>nspirational<span>Q</span>uotes</a></h1>
					        </div>

						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li  class="<?php if($title=="home") {echo "active";} ?> "><a id="home" href="index.php">Home</a></li>
								<li  class="<?php if($title=="MyFavorite") {echo "active";} ?>"><a id="favorite" href="favorite.php">My Favorite Quotes</a></li>
							</ul>
					</div>
                </div>
        </div>
		<div class="clearfix"> </div>	
				        </nav>			
	    </div> 
    </div>
               		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!--Logout-->
<?PHP

if(isset($_GET['logout'])){
	unset($_SESSION);
	session_destroy();
	header('Location: index.php');
}
?>
<!-- ///////////////////////////////////////////////////////////////////////// -->
	<!--Register button-->

	<div class="w3_agilits_banner_bootm">
		<div class="w3_agilits_inner_bottom">
			<div class="col-md-6 wthree_agile_login">
					<ul>
					<?PHP if(isset($_SESSION) && isset($_SESSION['id']) ){?>
							<li><a href="index.php?logout=yes" class="login reg">Logout</a></li>
							<li>Welcome, <?PHP echo $_SESSION['username'];?></li>
						<?PHP }else{ ?>
							<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myRegister">Register</a></li>
							<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myLogin">Login</a></li>
						<?PHP } ?>
			</div>
		</div>
	</div>	
  
	<!--Register dialog-->

	<?PHP
	
	if(isset($_POST['submitRegister'])){

		$q = "insert into registration (username, firstname, lastname, country, userpassword, conform_password)
        values ('".$_POST['username']."', '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['country']."', '".$_POST['userpassword']."', '".$_POST['conform_password']."')";

        if ($con->query($q) === TRUE) {
          echo "<script>alert('Done Registered');</script>";
        }else{
			echo "<script>alert('The username is used');</script>";
		}
    	$con->close();
	}
	?>

	<div class="modal fade" id="myRegister" tabindex="-1" role="dialog" >
		<div class="modal-dialog">			
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Register</h4>
					<div class="login-form">
						<form action="#" method="post" name="Register_form" onsubmit="return validate();">
							<input type="text" name="fname" placeholder="First Name" required >
							<input type="text" name="lname" placeholder="Last Name" required onblur="
								if(document.Register_form.username.value=='' && document.Register_form.fname.value!='' && document.Register_form.lname.value!='')
								{
								var username = document.Register_form.fname.value.substr(0,1) + document.Register_form.lname.value.substr(0,49);
								username = username.replace(/\s+/g, '');
								username = username.replace(/\'+/g, '');
								username = username.replace(/-+/g, '');
								username = username.toLowerCase();
								document.Register_form.username.value = username;
								}
								"/>
							<input type="text" name="username" placeholder="Username" required>
							<input type="text" name="country" placeholder="Country" required >
							<input type="password" name="userpassword" placeholder="Password" required>
							<input type="password" name="conform_password" placeholder="Confirm Password" required >
										
							<div class="tp">
								<input type="submit" name="submitRegister" value="REGISTER NOW">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- validation for registration -->

<script>
function validate()
{
  var pwd = document.forms["Register_form"]["userpassword"].value;
  var Cpwd = document.forms["Register_form"]["conform_password"].value;

  if(!pwd.toString().match(Cpwd))
  {
    alert("password do not match");
      return false ; 
  }

}
</script>

<!-- ///////////////////////////////////////////////////////////////////////// -->
<!--Login dialog-->

<?PHP

if(isset($_POST['submitLogin']) ){ 
	$q = "select * from registration where username = '".$_POST['username']."' AND userpassword = '".$_POST['userpassword']."' ";
	$registration = $con->query($q);
	$row = $registration->fetch_assoc();

	if($row){
	$_SESSION['id'] =  $row['id'];
	$_SESSION['username'] =   $row['username'];

	echo "<script>window.location='index.php'</script>";
	
	}else{
		echo "<script>alert('The UserName / Passwod is incorrect')</script>";
	}

	$con->close();
}

?>
<div class="modal fade" id="myLogin" tabindex="-1" role="dialog" >

<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4>Login</h4>
	<div class="login-form">
		<form action="#" method="post" name="Login_form" >
			<input type="text" name="username" placeholder="Username"  >
			<input type="password" name="userpassword" placeholder="Password">
			<div class="tp">
				<input type="submit" name="submitLogin" value="LOGIN">
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
            
	</body>
</html>
