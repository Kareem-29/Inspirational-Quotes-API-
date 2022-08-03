<?php 

$title="MyFavorite";
require("header.php"); 

?>

<div class="w3_content_agilleinfo_inner">
	<div class="agile_featured_movies">
		<div class="inner-agile-w3l-part-head ">
			<h3 class="w3l-inner-h-title">My Favorite Quotes</h3>
				<!-- <p class="w3ls_head_para">Add short Description</p> -->

				<?PHP
					if( isset($_SESSION['id'])){
						$id = $_SESSION['id'];
						$q = "SELECT * FROM favorite Where id = '$id' ";
						$result = $con->query($q);  // mysqli_query($con,$q);
			    ?> 
            <div class="row">
			<?PHP $i = 0;
				while($mov = $result->fetch_assoc() ) {  //fetch_assoc($result)
					$i++;
			?>

<div class="col-lg-2" style="background-color: #02a388; margin:10px; color: white;">
<?PHP echo $mov['quote'];?>

<div class="w3l-movie-text" style="color:black;" ><h6> 
- <?PHP echo $mov['author'];?>
</h6>
</div>
</div>

<?PHP } ?>

</div>

<?PHP
	}else{
		echo "<div class='text-danger'>You must be logged in</div>";
	}
?>
								
</div>
</div>
</div>

</body>
</html>