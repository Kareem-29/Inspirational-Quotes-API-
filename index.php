<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

<?php 
$title="home";
require("header.php"); ?>

<style>
		#mov2{
			margin : 1.5em  1.5em 0 1.1em ;
			font-size: 2em;
			text-transform: uppercase;
			color: #0c0d0d;
			text-align: left;
	    }
		#pragraph{
			margin : 1em  1.5em 1.5em 1.5em;
			color: #0c0d0d;
			text-align: left;
		}
		* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: helvetica;
  font-size: 18px;
}

.container {
	background-color: #02a388;
	margin-top: 20px;
	padding-top: 20px;
	
}

.quote-box {
  border: 2px solid #ddd;
  padding: 30px 20px;
  margin-bottom: 20px;
}
.quote {
  color: white;
  text-align: center;
}
.author {
  float: right;
  color: black;
  font-weight: bold;
  font-style: italic;
  margin-top: 10px;
}

td
{
	padding: 5px;
}
</style>
</head>
<body>
<!-- Header-->

<?PHP 

if(isset($_GET['add']) ){ 

	if(isset($_SESSION['id']) ){	
		$id = $_SESSION['id'];
		$text  = $_GET['text'];
		$author  = $_GET['author'];

		$q = "select favID from favorite where id = '$id' AND author = '$author' ";
		$registration = $con->query($q);
		$row = $registration->fetch_assoc();

		if(!$row){
			$q = "insert into favorite ( id, quote, author )
			values ('$id', '$text', '$author')";
			
			$con->query($q);
		}else{
			echo "<script>alert('The Quote is already added to your favorite page ')</script>";
		}
	}
	else{
	 	echo "<script>alert('Login please.. ')</script>";
	}
	
}
?>

<h1 id="mov2"> <strong> Inspirational Quotes </strong> </h1>

<h3 id="pragraph">Inspirational quotes can help you reach your potential each day. They’re just words. But they’re positive words. 
</br> And if you’re on the verge of giving up or struggling to push yourself to the next level, sometimes that’s just what you need.  </h3>

<!-- ///////////////////////////////////////////////////////////////////////// -->

<h3 class="agile_w3_title">  <span>POPULAR Quotes</span></h3>

<div class=container>
<table>
<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote">"Quote goes here..."</p>
    <small class="author" id="author">- Author</small>
	<div id=btn></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote2">"Quote goes here..."</p>
    <small class="author" id="author2">- Author</small>
	<div id=btn2></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote3">"Quote goes here..."</p>
    <small class="author" id="author3">- Author</small>
	<div id=btn3></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>

<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote4">"Quote goes here..."</p>
    <small class="author" id="author4">- Author</small>
	<div id=btn4></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote5">"Quote goes here..."</p>
    <small class="author" id="author5">- Author</small>
	<div id=btn5></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote6">"Quote goes here..."</p>
    <small class="author" id="author6">- Author</small>
	<div id=btn6></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>



<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote7">"Quote goes here..."</p>
    <small class="author" id="author7">- Author</small>
	<div id=btn7></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote8">"Quote goes here..."</p>
    <small class="author" id="author8">- Author</small>
	<div id=btn8></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote9">"Quote goes here..."</p>
    <small class="author" id="author9">- Author</small>
	<div id=btn9></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>




<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote10">"Quote goes here..."</p>
    <small class="author" id="author10">- Author</small>
	<div id=btn10></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote11">"Quote goes here..."</p>
    <small class="author" id="author11">- Author</small>
	<div id=btn11></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote12">"Quote goes here..."</p>
    <small class="author" id="author12">- Author</small>
	<div id=btn12></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>


<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote13">"Quote goes here..."</p>
    <small class="author" id="author13">- Author</small>
	<div id=btn13></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote14">"Quote goes here..."</p>
    <small class="author" id="author14">- Author</small>
	<div id=btn14></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote15">"Quote goes here..."</p>
    <small class="author" id="author15">- Author</small>
	<div id=btn15></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>



<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote16">"Quote goes here..."</p>
    <small class="author" id="author16">- Author</small>
	<div id=btn16></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote17">"Quote goes here..."</p>
    <small class="author" id="author17">- Author</small>
	<div id=btn17></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote18">"Quote goes here..."</p>
    <small class="author" id="author18">- Author</small>
	<div id=btn18></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>



<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote19">"Quote goes here..."</p>
    <small class="author" id="author19">- Author</small>
	<div id=btn19></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote20">"Quote goes here..."</p>
    <small class="author" id="author20">- Author</small>
	<div id=btn20></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote21">"Quote goes here..."</p>
    <small class="author" id="author21">- Author</small>
	<div id=btn21></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>




<tr>
	<td>
  <div class="quote-box">
    <p class="quote" id="quote22">"Quote goes here..."</p>
    <small class="author" id="author22">- Author</small>
	<div id=btn22></div>
  </div>
		<div class="cleafix"></div>
	</td>

	<td>
	<div class="quote-box">
    <p class="quote" id="quote23">"Quote goes here..."</p>
    <small class="author" id="author23">- Author</small>
	<div id=btn23></div>
  </div>
		<div class="cleafix"></div>
	</td>
	<td>
	<div class="quote-box">
    <p class="quote" id="quote24">"Quote goes here..."</p>
    <small class="author" id="author24">- Author</small>
	<div id=btn24></div>
  </div>
		<div class="cleafix"></div>
	</td>
</tr>

</table>	
</div>


	<!--API -->

<script>

const api = "https://type.fit/api/quotes";

const quote = document.getElementById("quote");
const author = document.getElementById("author");
const btn = document.getElementById("btn");

const quote2 = document.getElementById("quote2");
const author2 = document.getElementById("author2");
const btn2 = document.getElementById("btn2");

const quote3 = document.getElementById("quote3");
const author3 = document.getElementById("author3");
const btn3 = document.getElementById("btn3");

const quote4 = document.getElementById("quote4");
const author4 = document.getElementById("author4");
const btn4 = document.getElementById("btn4");

const quote5 = document.getElementById("quote5");
const author5 = document.getElementById("author5");
const btn5 = document.getElementById("btn5");

const quote6 = document.getElementById("quote6");
const author6 = document.getElementById("author6");
const btn6 = document.getElementById("btn6");

const quote7 = document.getElementById("quote7");
const author7 = document.getElementById("author7");
const btn7 = document.getElementById("btn7");

const quote8 = document.getElementById("quote8");
const author8 = document.getElementById("author8");
const btn8 = document.getElementById("btn8");

const quote9 = document.getElementById("quote9");
const author9 = document.getElementById("author9");
const btn9 = document.getElementById("btn9");

const quote10 = document.getElementById("quote10");
const author10 = document.getElementById("author10");
const btn10 = document.getElementById("btn10");

const quote11 = document.getElementById("quote11");
const author11 = document.getElementById("author11");
const btn11 = document.getElementById("btn11");

const quote12 = document.getElementById("quote12");
const author12 = document.getElementById("author12");
const btn12 = document.getElementById("btn12");

const quote13 = document.getElementById("quote13");
const author13 = document.getElementById("author13");
const btn13 = document.getElementById("btn13");

const quote14 = document.getElementById("quote14");
const author14 = document.getElementById("author14");
const btn14 = document.getElementById("btn14");

const quote15 = document.getElementById("quote15");
const author15 = document.getElementById("author15");
const btn15 = document.getElementById("btn15");

const quote16 = document.getElementById("quote16");
const author16 = document.getElementById("author16");
const btn16 = document.getElementById("btn16");

const quote17 = document.getElementById("quote17");
const author17 = document.getElementById("author17");
const btn17 = document.getElementById("btn17");

const quote18 = document.getElementById("quote18");
const author18 = document.getElementById("author18");
const btn18 = document.getElementById("btn18");


const quote19 = document.getElementById("quote19");
const author19 = document.getElementById("author19");
const btn19 = document.getElementById("btn19");

const quote20 = document.getElementById("quote20");
const author20 = document.getElementById("author20");
const btn20 = document.getElementById("btn20");

const quote21 = document.getElementById("quote21");
const author21 = document.getElementById("author21");
const btn21 = document.getElementById("btn21");

const quote22 = document.getElementById("quote22");
const author22 = document.getElementById("author22");
const btn22 = document.getElementById("btn22");

const quote23 = document.getElementById("quote23");
const author23 = document.getElementById("author23");
const btn23 = document.getElementById("btn23");


const quote24 = document.getElementById("quote24");
const author24 = document.getElementById("author24");
const btn24 = document.getElementById("btn24");
<?php

$quote = array();

$qury = "SELECT * FROM data";
$res = mysqli_query($con,$qury);

while($row = mysqli_fetch_assoc($res))
{
	$quote[$row["id"]] = array(
		"quote" => $row["text"],
		"author" => $row["author"],
	);

	<ul>

	 foreach($quote as $s)
	{  
		<li>
			<a href="item.php?id=<?php echo $k; ?>">
			
			<img src="<?php echo $s["img"];?>" alt="<?php echo $s["name"];?>">
			<p>View Details</p>
			</a>
	
			
		</li>

	</ul>

}
?>

  fetch(api)
    .then((res) => res.json())
    .then((data) => {
      quote.innerHTML = "<p>“"+data[0].text+"”</p>";
      author.innerHTML ="<small> -"+data[0].author+"</small>";
	  btn.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[0].text+"&author="+data[0].author+"'>Add Favorite</a>";


	  quote2.innerHTML = "<p>“"+data[1].text+"”</p>";
      author2.innerHTML ="<small> -"+data[1].author+"</small>";
	  btn2.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[1].text+"&author="+data[1].author+"'>Add Favorite</a>";


	  quote3.innerHTML = "<p>“"+data[2].text+"”</p>";
      author3.innerHTML ="<small> -"+data[2].author+"</small>";
	  btn3.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[2].text+"&author="+data[2].author+"'>Add Favorite</a>";


	  quote4.innerHTML = "<p>“"+data[3].text+"”</p>";
      author4.innerHTML ="<small> -"+data[3].author+"</small>";
	  btn4.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[3].text+"&author="+data[3].author+"'>Add Favorite</a>";


	  quote5.innerHTML = "<p>“"+data[4].text+"”</p>";
      author5.innerHTML ="<small> -"+data[4].author+"</small>";
	  btn5.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[4].text+"&author="+data[4].author+"'>Add Favorite</a>";
	  
	  quote6.innerHTML = "<p>“"+data[5].text+"”</p>";
      author6.innerHTML ="<small> -"+data[5].author+"</small>"
	  btn6.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[5].text+"&author="+data[5].author+"'>Add Favorite</a>";
	  
	  
	  quote7.innerHTML = "<p>“"+data[6].text+"”</p>";
      author7.innerHTML ="<small> -"+data[6].author+"</small>"
	  btn7.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[6].text+"&author="+data[6].author+"'>Add Favorite</a>";


	  quote8.innerHTML = "<p>“"+data[7].text+"”</p>";
      author8.innerHTML ="<small> -"+data[7].author+"</small>"
	  btn8.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[7].text+"&author="+data[7].author+"'>Add Favorite</a>";
	 
	  quote9.innerHTML = "<p>“"+data[8].text+"”</p>";
      author9.innerHTML ="<small> -"+data[8].author+"</small>"
	  btn9.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[8].text+"&author="+data[8].author+"'>Add Favorite</a>";

	  quote10.innerHTML = "<p>“"+data[9].text+"”</p>";
      author10.innerHTML ="<small> -"+data[9].author+"</small>"
	  btn10.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[9].text+"&author="+data[9].author+"'>Add Favorite</a>";
	  
	  quote11.innerHTML = "<p>“"+data[10].text+"”</p>";
      author11.innerHTML ="<small> -"+data[10].author+"</small>"
	  btn11.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[10].text+"&author="+data[10].author+"'>Add Favorite</a>";
	  
	  quote12.innerHTML = "<p>“"+data[11].text+"”</p>";
      author12.innerHTML ="<small> -"+data[11].author+"</small>"
	  btn12.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[11].text+"&author="+data[11].author+"'>Add Favorite</a>";
	  
	  quote13.innerHTML = "<p>“"+data[12].text+"”</p>";
      author13.innerHTML ="<small> -"+data[12].author+"</small>"
	  btn13.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[12].text+"&author="+data[12].author+"'>Add Favorite</a>";
	  
	  quote14.innerHTML = "<p>“"+data[13].text+"”</p>";
      author14.innerHTML ="<small> -"+data[13].author+"</small>"
	  btn14.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[13].text+"&author="+data[13].author+"'>Add Favorite</a>";

	  quote15.innerHTML = "<p>“"+data[14].text+"”</p>";
      author15.innerHTML ="<small> -"+data[14].author+"</small>"
	  btn15.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[14].text+"&author="+data[14].author+"'>Add Favorite</a>";

	  quote16.innerHTML = "<p>“"+data[15].text+"”</p>";
      author16.innerHTML ="<small> -"+data[15].author+"</small>"
	  btn16.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[15].text+"&author="+data[15].author+"'>Add Favorite</a>";
	  
	  quote17.innerHTML = "<p>“"+data[16].text+"”</p>";
      author17.innerHTML ="<small> -"+data[16].author+"</small>"
	  btn17.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[16].text+"&author="+data[16].author+"'>Add Favorite</a>";

	  quote18.innerHTML = "<p>“"+data[17].text+"”</p>";
      author18.innerHTML ="<small> -"+data[17].author+"</small>"
	  btn18.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[17].text+"&author="+data[17].author+"'>Add Favorite</a>";

	  
	  quote19.innerHTML = "<p>“"+data[18].text+"”</p>";
      author19.innerHTML ="<small> -"+data[18].author+"</small>"
	  btn19.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[18].text+"&author="+data[18].author+"'>Add Favorite</a>";

	  


	  quote20.innerHTML = "<p>“"+data[19].text+"”</p>";
      author20.innerHTML ="<small> -"+data[19].author+"</small>"
	  btn20.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[19].text+"&author="+data[19].author+"'>Add Favorite</a>";

	  
	  quote21.innerHTML = "<p>“"+data[20].text+"”</p>";
      author21.innerHTML ="<small> -"+data[20].author+"</small>"
	  btn21.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[20].text+"&author="+data[20].author+"'>Add Favorite</a>";

	  
	  quote22.innerHTML = "<p>“"+data[21].text+"”</p>";
      author22.innerHTML ="<small> -"+data[21].author+"</small>"
	  btn22.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[21].text+"&author="+data[21].author+"'>Add Favorite</a>";

	  
	  quote23.innerHTML = "<p>“"+data[22].text+"”</p>";
      author23.innerHTML ="<small> -"+data[22].author+"</small>"
	  btn23.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[22].text+"&author="+data[22].author+"'>Add Favorite</a>";

	  
	   
	  quote24.innerHTML = "<p>“"+data[23].text+"”</p>";
      author24.innerHTML ="<small> -"+data[23].author+"</small>"
	  btn24.innerHTML= "<a  class='btn btn-default' href='index.php?add&text="+data[23].text+"&author="+data[23].author+"'>Add Favorite</a>";
 


    });

					 


		
</script>




<script src="js/bootstrap.js"></script>

</body>
</html>