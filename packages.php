<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style type="text/css">

	
	*{
		margin:0; padding: 0;
    
	}	
	.package{
		width: 300px;
		border-radius: 25px;
		box-shadow: 0 0 5px rgba(0,0,0, 0.2);
		overflow: hidden;
		font-family: sans-serif;
		font-size: 16px;
		/*line-height: 1.5;*/
		color: #555555;
		margin: 15px;
		padding-left:0;
		padding-top:0;
	}	

	.package-hedder{
		
		width:190%;	
		padding:20px;
		background: #ffa500;
		color: #ffffff;
	}
	
	.package-title,
	.package-summary{
		margin: 0;
		text-align: center;
	}

	.package-title{
		font-size: 1.5em;
		font-weight: 400;
	}

	.package-summary{
		font-size: 1em;
		font-weight: 300;
	}
	.package-dis{
		padding: 25px;
		
	}
	/*.package-list{
		align-items:justify;
	}*/
	.package-feature{
		list-style: none;
		margin: 0;
		padding-left: 25px;
		position: relative;
		font-size: 0.9em;
	}
	.package-feature:not(:last-child){
		margin-bottom: 0.5em;
	}
	.package-feature::before{
		content: "\2714";
		color: #ffa500;
		position: absolute;
		left: 0;
	}
	.package-action{
		padding: 25px;
		border-top: 1px solid #eeeeee;
		display: flex;
		flex-direction: column;
	}
	.package-button{
		display: inline-block;
		margin: 15px auto;
		padding: 8px 20px;
		text-decoration: none;
		color: #ffa500;
		background: #ffffff;
		border-radius: 5px;
		border: 1px solid #ffa500;
		text-transform: uppercase;
		letter-spacing: 0.02em;
		font-weight: bold;
	}
	.package-button:hover{
		background: #ffa500;
		color: black;
	}

	.package-cost{
		margin-left: 50px;
		text-align: center;
		font-size: 2em;
		color: #000000;
	}

	.package-cost span{
		 color:#000000;
  font-size: 2rem;
  text-decoration: line-through;
	}

	.package-text{
		font-size: 0.9em;
		text-align: center;
		margin: 0 0 10px 0;

	}

	.container{
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 10px;
	}
	.topic{
		color: orange;
		font-size: 3em;
		text-align: center;
		margin-top:100px;
	}

	</style>

	
</head>
<body>

<header>
    <?php @include 'header.php'; ?>
  </header>


<h1 class="topic" style="margin-top:100px;">Local customer</h1>
<div class="container">
	<section class="package">
		<div class="package-hedder">
			<h1 class="package-title">Personal</h1>
			<h2 class="package-summary">Choose your package</h2>	
 		</div>

		<div class="package-dis">
			<ul class="package-list">
				<li class="package-feature">Sky diving</li>
				<li class="package-feature">Water rafting</li>
				<li class="package-feature">Flying rawana</li>
				<li class="package-feature">ATV</li>
				<li class="package-feature">Equipment</li>
				<li class="package-feature">Food  & drinks</li>
				<li class="package-feature">Guides</li>
			</ul>
		</div>
		<div class="package-action">
			   <p class="package-cost"><span>Rs:20,000</span></p>
	      	<p class="package-cost">Rs:18,000</p>
				<p class="package-text">One day</p>	
				<a href= <?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=1" : "login.php" ;?> class="package-button">Book</a>
				<p class="package-text">No limite adventure</p>
		</div>
 	</section>


 <section class="package">
 	<div class="package-hedder">
		<h1 class="package-title">Standard</h1>
		<h2 class="package-summary">Choose your package</h2>	
 	</div>
	<div class="package-dis">
		<ul class="package-list">
			<li class="package-feature">Sky diving</li>
			<li class="package-feature">Rafting</li>
			<li class="package-feature">Flying rawana</li>
			<li class="package-feature">Camping</li>
			<li class="package-feature">Kayaking</li>
			<li class="package-feature">Jeski ride</li>
			<li class="package-feature">ATV</li>
			<li class="package-feature">Equipment</li>
			<li class="package-feature">Food  & drinks</li>
			<li class="package-feature">Guides</li>
		</ul>
	</div>
	<div class="package-action">
		<p class="package-cost"><span> Rs:27,000</span></p>
		<p class="package-cost"> Rs:25,000</p>	
		<p class="package-text">One day</p>	
		<a href=<?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=2" : "login.php" ;?> class="package-button">Book</a>
		<p class="package-text">No limite adventure</p>
	</div>
</section>
	
<section class="package">
	<div class="package-hedder">
		<h1 class="package-title">Basic</h1>
		<h2 class="package-summary">Choose your package</h2>	
	</div>
	<div class="package-dis">
		<ul class="package-list">
			<li class="package-feature">paintball  fire</li>
			<li class="package-feature">jeski ride</li>
			<li class="package-feature">Rock climbing</li>
			<li class="package-feature">Water rafting</li>
			<li class="package-feature">Equipment</li>
			<li class="package-feature">Food  & drinks</li>
			<li class="package-feature">Guides</li>
		</ul>
	</div>
	<div class="package-action">
	   <p class="package-cost"><span>Rs:30,000</span></p>
	   <p class="package-cost">Rs:28,000</p>				
		<p class="package-text">One day</p>	
		<a href=<?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=3" : "login.php" ;?> class="package-button">Book</a>
		<p class="package-text">No limite adventure</p>
	</div>
 </section> 
 </div> <!--first container tag en ins hear-->
 	
 
 <h1 class="topic">Forign customer</h1>
<div class="container">
		
	
 <section class="package">
 	<div class="package-hedder">
		<h1 class="package-title">Personal</h1>
		<h2 class="package-summary">Choose your package</h2>	
 	</div>
	<div class="package-dis">
		<ul class="package-list">
			<li class="package-feature">Sky diving</li>
			<li class="package-feature">Water rafting</li>
			<li class="package-feature">Flying rawana</li>
			<li class="package-feature">ATV</li>
			<li class="package-feature">Equipment</li>
			<li class="package-feature">Food  & drinks</li>
			<li class="package-feature">Guides</li>
		</ul>
	</div>
	<div class="package-action">
		<p class="package-cost"><span>$50</span></p>
		<p class="package-cost">$30</p>	
		<p class="package-text">One day</p>	
		<a href=<?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=4" : "login.php" ;?> class="package-button">Book</a>
		<p class="package-text">No limite adventure</p>
	</div>
 </section>


 <section class="package">
 	<div class="package-hedder">
 	<h1 class="package-title">Standard</h1>
 	<h2 class="package-summary">Choose your package</h2>	
 	</div>
<div class="package-dis">
	<ul class="package-list">
		<li class="package-feature">Sky diving</li>
		<li class="package-feature">Rafting</li>
		<li class="package-feature">Flying rawana</li>
		<li class="package-feature">Camping</li>
		<li class="package-feature">Kayaking</li>
		<li class="package-feature">Jeski ride</li>
		<li class="package-feature">ATV</li>
		<li class="package-feature">Equipment</li>
		<li class="package-feature">Food  & drinks</li>
		<li class="package-feature">Guides</li>
	</ul>
</div>
<div class="package-action">
<p class="package-cost"><span>$100</span></p>
<p class="package-cost"> $80</p>	
<p class="package-text">One day</p>	
<a href=<?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=5" : "login.php" ;?> class="package-button">Book</a>
<p class="package-text">No limite adventure</p>
</div>
 </section>
 <section class="package">
 	<div class="package-hedder">
 	<h1 class="package-title">Basic</h1>
 	<h2 class="package-summary">Choose your package</h2>	
 	</div>
<div class="package-dis">
	<ul class="package-list">
		<li class="package-feature">paintball  fire</li>
		<li class="package-feature">jeski ride</li>
		<li class="package-feature">Rock climbing</li>
		<li class="package-feature">Water rafting</li>
		<li class="package-feature">Equipment</li>
		<li class="package-feature">Food  & drinks</li>
		<li class="package-feature">Guides</li>
	</ul>
</div>
<div class="package-action">
<p class="package-cost"><span>$90</span></p>
<p class="package-cost">$70</p>	
<p class="package-text">One day</p>	
<a href=<?php echo $retVal = (isset($_SESSION['user_id'])) ? "book.php?pakage=6" : "login.php" ;?> class="package-button">Book</a>
<p class="package-text">No limite adventure</p>
</div>
 </section>

 </div>
 <footer>
    <?php @include 'footer.php'; ?>
</footer>
</body>
</html>