<html>
<body>
<?php

$con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from items");
      
	   while($row=mysqli_fetch_assoc($db))
	   {
	   ?>
	 <table>
	 <tr>
	   <td><img src="photos/<?php echo $row['photo'];?>" style="width:250px;height:200px;float:left;border:2px solid black;
	   box-shadow: 5px 10px 8px 10px #888888;"></td>
	   <td style="padding-left:40px"><div>
	    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:white;
  transition: 0.3s;padding:20px;
  width: 1000px;"><b><font size="5"><?php  echo $row['details'];?></font></b>
	   <br><br>
	   <font size="5px"><?php  echo $row['description'];?></font>
	   <br><br>
	   <b><font size="5"><?php  echo "Rs. ".$row['price'];?></font></b>
	  
	   <?php echo "<b><a style='color:white;text-decoration:none; 'href='abc1.php?pid=".$row["itemid"]."'>"."ADD TO CART </b>";?></div></div>
	  </td>
	  </tr>
	   </table>
        <br>
	   <?php }?>
	   </body>
	   
	   </html>