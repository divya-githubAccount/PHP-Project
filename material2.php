<html>
<body bgcolor="#E5CCFF">
<?php

$con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from items");
      
	   while($row=mysqli_fetch_assoc($db))
	   {
	   if($row['itemid']%2==0)
	   {
	   ?>
	   <div>
	   <table><tr>
	    <td><div style="float:left;padding:10px;border-radius: 5px;box-shadow: 0 0 8px rgba(0, 0, 0, .7);background: rgba(240,230,220, .7);
  
 "><img src="photos/<?php echo $row['photo1'];?>" style="width:300px;height:300px;
   "></div>
	   <td><div style="float:right;padding-left:70px;"><div style="padding:20px;background-color:#FFE4F9"><div style="padding:20px;background-color:#FDD4EA;color:tomato;
	   font-size:20;
	   box-shadow:0 0 8px rgba(0,0,0, .7) "><?php  echo $row['details1'];?>
	    <br><br>
	   <?php  echo "Rs. ".$row['price1'];?></div></div></div>
	   <br></td></td></tr></table>
	    </div>
		
		<?php }
		else{ ?>
		<div>
		<br>
		<br>
		<table><tr>
	    <td><div style="float:right;padding:10px;border-radius: 5px;
 
  box-shadow: 0 0 8px rgba(0, 0, 0, .7); background: rgba(240,230,220, .7);"><img src="photos/<?php echo $row['photo1'];?>" style="width:300px;height:300px;
		"></div>
           
	   <div style="float:left;padding-left:170px;padding-right:120px;"><div style="padding:20px;background-color:#FFE4F9"><div style="padding:20px;background-color:#FDD4EA;color:tomato;
	   font-size:20;box-shadow:0 0 8px rgba(0,0,0, .7) "><?php  echo $row['details1'];?>
	  <br><br>
	   <?php  echo "Rs. ".$row['price1'];?></div></div></div>
	   
	   <br></td></td>
	  
		<?php }} ?>
	   </tr></table>
	    </div>
		
	   </body>
	   
	   </html>