<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="bg1.gif">
<?php
      echo "<html>
	  <div style='background-color:red;padding-bottom:20px'>
	           <div class='container' style='padding-top:30px'>
			   <div style='padding-left:120px;float:left'><b><i><font color='white'><font size='10'>KIDS WEAR</font></font></b></i></div>
			   <div >
			   <form action='abc2.php' method='Post' style='padding-left:1000px'>
			  
			   </form></div>
  <div class='dropdown text-right' style='float:right'>
    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' style='padding-left:30px;padding-top:10px;padding-bottom:10px;
	padding-right:30px'><b><font size='5'>BABY</font></b>
    <span class='caret'></span></button>
    <ul class='dropdown-menu dropdown-menu-right'>
      <li ><a href='material1.php'>Potty-training pants</a></li>
	  <li class='divider'></li>
      <li><a href='material2.php'>Baby Swaddles</a></li>
      
    </ul>
  </div>
</div>          </div>
	     </html>";

	     $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"BABY") or die("unable to connect");

      $db=mysqli_query($con,"select * from kidswear");
      
	   while($row=mysqli_fetch_assoc($db))
	   {
	   ?>
	  <table style="padding:40px">
	  <tr>
	  <td style="padding:20px">
	  <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 400px;">
	   <img src="photos/<?php echo $row['pphoto'];?>" style="width:100%">
	  <div class="container" style="padding: 2px 16px">
	   <p style="font-size:20px;color:blue"><b><?php  echo $row['pname'];?></b></p></div></div></td>
	   <td>
	   <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 400px;">
	   <img src="photos/<?php echo $row['pphoto1'];?>" style="width:100%">
	   <div class="container" style="padding: 2px 16px">
	   <p style="font-size:20px;color:blue"><b><?php  echo $row['pname1'];?></b></p>
	  </div></div></td>
	  <td style="padding:20px">
	  <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 400px;">
	   <img src="photos/<?php echo $row['pphoto2'];?>" style="width:100%">
	  <div class="container" style="padding: 2px 16px">
	   <p style="font-size:20px;color:blue"><b><?php  echo $row['pname2'];?></b></p></div></div></td>
	   
	    </tr>
		</table>
	   <?php }?>
	   </body>
	   
	   </html>