<?php echo"<html>
<head>


<meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
   
	
	
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
 integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
 <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' 
 integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' 
integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'
 integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>
<link rel='stylesheet' href='babystyle.css'>
</head>
<body>
<header>
<div id='top'>

    <div id='mySidepanel' class='sidepanel'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  
  <a href='productdisplay.php'>KIDS PRODUCTS</a>
  <a href='kidsdisplay.php'>KIDS WEAR</a>
 
</div>

<button class='openbtn' onclick='openNav()'>&#9776; SHOPPING</button>

 <div id='inside-top' style='float:right;padding-right:500px;font-size:30px;'>
  <p><b><i>BABIES NECESSITIES</i></b></p>
  </div>
  <br>
  <br>
  <a role='button' class='btn btn-block btn-warning' href='#food'><strong>BABY FOOD RECIPES</strong></a>
  </div>
  
  
  </header>
 <div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img class='d-block ' style='height: 600px;
 width:100%;' src='abc2.jpg' alt='First slide'>
    </div>
    
    <div class='carousel-item'>
      <img class='d-block ' style='height: 600px;width: 100%;' src='abc1.jpg' alt='Third slide'>
    </div>
  </div>
</div>
<br>
<hr>
<br>
<div class='row-11 row-content' id='food'>
            <div class='col-10 offset-1'>
                <h2>Baby Food Recipes</h2>
                <ul class='nav nav-tabs' >
                    <li class='nav-item' >
                      <a class='nav-link active' href='#small'
                        role='tab' data-toggle='tab'>4-6 Months</a>
                    </li>
                    <li class='nav-item' >
                      <a class='nav-link' href='#medium' role='tab'
                        data-toggle='tab'>6-9 Months</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='#large' role='tab'
                        data-toggle='tab'>9-12 Months</a>
                    </li>
                   
                </ul>
                <div class='tab-content'>
                    <div role='tabpanel' class='tab-pane fade show active' id='small'>
                <h3>4-6 Months <small>Baby food</small></h3>
                <p class='d-none d-sm-block'>
				<h5>Pea purée</h5> "?>
				<?php 
				$con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from babyrecipe");
	   while($row=mysqli_fetch_assoc($db))
	   {
	       if($row['r_id']=='1')
		   {
		?>		
				<video width='1000' height='300' controls>
  <source src='videos/<?php echo $row['video'];?>'   type='video/mp4'>
  <source src='movie.ogg' type='video/ogg'>
  
  
  </video>
  <?php }}?>
				<?php echo
			"<br><br><b>Peas are a small yet mighty source of nutrition, packing vitamins A and C, iron, protein, and calcium.
If the skin of the peas makes the texture less appealing for your child, make sure to strain them to make it as smooth as possible.</b></p>
            </div>
            <div role='tabpanel' class='tab-pane fade' id='medium'>
                <h3>6-9 Months <small>Baby food</small></h3>
                <p class='d-none d-sm-block'>
				<h5>Veggies and sole purée</h5>" ?>
				 <?php 
				 $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from babyrecipe");
	   while($row=mysqli_fetch_assoc($db))
	   {
				 
			 if($row['r_id']=='2')
				{
				?>
				<video width='1000' height='300' controls>
            <source src='videos/<?php echo $row['video'];?>'   type='video/mp4'>
             <source src='movie.ogg' type='video/ogg'>
  
  
  </video>
  <?php }}?>
				
			<?php	echo"<br><br><b>Potatoes, carrots, peas, and fish make for a delicious combination that’s ready to eat in under 8 minutes.
Vegit is a seasoning ingredient in this recipe 
that can also be subbed for Mrs. Dash, another low-sodium seasoning. This is a great, simple introduction to fish for your baby.
				</b></p>
            </div>
            <div role='tabpanel' class='tab-pane fade' id='large'>
                <h3>9-12 Months <small>Baby food</small></h3>
                <p class='d-none d-sm-block'>
				<h5>Quinoa banana mash</h5>"?>
				
				 <?php 
				 $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from babyrecipe");
	   while($row=mysqli_fetch_assoc($db))
	   {
				 
			 if($row['r_id']=='3')
				{
				?>
				<video width='1000' height='300' controls>
            <source src='videos/<?php echo $row['video'];?>'   type='video/mp4'>
             <source src='movie.ogg' type='video/ogg'>
  
  
  </video>
  <?php }}?>
				<?php echo"<br><br><b>
				Quinoa is a protein-packed grain that makes a great addition to your growing baby’s diet. This adds an exciting new 
				texture to the banana mash, an ingredient that your baby probably already loves.
Also, try serving cooked quinoa by itself to your baby. The cooked seeds stick to baby’s fingers, which makes it an easy food to eat.
				</b></p>
            </div>
            
            </div>       
            </div>
			<br>
			<hr>
			<br>
			<footer style='background-color:black;padding:50px;'>
			 
                    <center><p style='color:white;'>© Copyright</p></center>
             </footer>
</body>
<script>
function openNav() {
  document.getElementById('mySidepanel').style.width = '250px';
}


function closeNav() {
  document.getElementById('mySidepanel').style.width = '0';
}
</script>
</html> "?>



