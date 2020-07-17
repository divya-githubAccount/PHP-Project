<html>
<body>
  <?php
     echo "<html>
	 <div style='margin:-15px;background-color:red;padding-bottom:30px;padding-top:20px;'>
	 <div style='float:left;padding-top:20px;padding-left:100px;font-size:30px;color:white;font-family:sans-serif'><b><i>BABY PRODUCTS</i></b></div>
	  <div style='padding-left:500px;padding-top:20px;'>
	 <form action='next.php' method='GET'>
	   <input type='text'  name='i2_name' placeholder='  Search...' style='width:400px;height:40px;padding-top:2px;padding-bottom:4px;'><button name='search' 
	   style='padding-top:8px;padding-bottom:8px;'><img src='image1.png' style='width:20px;height:20px;'></button>
	 </form></div>
	   </div>
	   <style>
	   * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1345px;
  position: relative;
  margin: auto;
  padding-top:14px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

	   .active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next, {font-size: 11px}
}
	   </style>
	   
	  	  <div class='slideshow-container'>

<div class='mySlides fade'>
  <img  src='image2.jpg' style='height:100%;width:100%'>
</div>

<div class='mySlides fade'>
  <img  src='image1.jpg' style='height:100%;width:100%'>
</div>

<div class='mySlides fade'>
  <img  src='image3.jpg' style='height:100%;width:100%'>
</div>

<a class='prev' onclick='plusSlides(-1)' >&#10094;</a>

  <a class='next'  onclick='plusSlides(1)'>&#10095;</a>

</div>
<br>

<div style='text-align:center'>
  <span class='dot' onclick='currentSlide(1)'></span> 
  <span class='dot'  onclick='currentSlide(2)'></span> 
 
 <span class='dot' onclick='currentSlide(3)'></span> 
</div>
<script>
 var slideIndex = 1;
 showSlides(slideIndex);

  function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace('active', '');
  }
  slides[slideIndex-1].style.display = 'block';  
  dots[slideIndex-1].className += ' active';
}
</script>

       </html>"  
  
  ?>
</body>
</html>