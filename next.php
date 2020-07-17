<html>
<body bgcolor="">
  <?php
    $con= mysqli_connect("localhost","root","") or die("Unable to connect");
      $db= mysqli_select_db($con,"BABY") or die("Could not select database");
	  if(isset($_GET['search']))
	  {
	  $name= $_GET['i2_name'];
	    if($_GET['i2_name']=='Baby kits' || $_GET['i2_name']=='Baby creams and lotions' || $_GET['i2_name']=='Baby oils and shampoo' )
		{
       $query="Select *from item1 where i1_name = '$name' ";
	   $query_run = mysqli_query($con,$query);
	   
	   while($row = mysqli_fetch_assoc($query_run))
	   {
		echo "<div style='float:left;padding:5px;'><table><tr><td><div style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;padding:4px;background:white;height:400px;'><img src='photos/".$row['i1_photo']."'style='width:200px;height:200px'><br><br><hr><b>
		<div style='background:white;width:350px;padding:35px;'>".$row['i1_detail']."<br><br>Rs. ".$row['i1_price']."</b></div></div></td></tr></table></div>";
		} 
	  }
	  else if($_GET['i2_name']!=''){
	      $query1=mysqli_query($con,"select * from item1");
	    while($row = mysqli_fetch_assoc($query1))
	   {
		echo "<div style='float:left;padding:5px;'><table><tr><td><div style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;padding:4px;background:white;height:400px;'><img src='photos/".$row['i1_photo']."'style='width:200px;height:200px'><br><br><hr><b>
		<div style='background:white;width:350px;padding:35px;'>".$row['i1_detail']."<br><br>Rs. ".$row['i1_price']."</b></div></div></td></tr></table></div>";
		} 
	  }
	  else{
	      echo "<script>alert('Please enter the details')</script>";
		  include "productdisplay.php";
	  }
	}
  ?>

</body>
</html>