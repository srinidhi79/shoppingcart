<?php session_start();?> 
<!DOCTYPE html>
<html>
<head>
<style>
.sri
{
font-size:2em;
text-align:left;
 color: rgba(191, 84, 46, 0.9);
}
.sr
{
font-size:3em;
 color: rgba(191, 84, 46, 0.9);
text-align:right;
}
h1{
  font-size: 5em;
      font-weight: 600;
      color: rgba(191, 84, 46, 0.9);
      display: inline-block;
      padding-bottom: 100px;
	 margin: 50% auto 0 auto;

      text-shadow: 1px 1px 3px $shadow-color;
}
h2{
 font-size: 2em;
      font-weight: 300;
      color: rgba(198, 204, 6, 0.9);
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h3{
 font-size: 2em;
      font-weight: 300;
      color: rgba(198, 204, 6, 0.9);
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
li{
 font-size: 1em;
      font-weight: 300;
      color: rgba(198, 204, 6, 0.9);
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h4{
 font-size: 2em;
      font-weight: 300;
      color: rgba(198, 204, 6, 0.9);
      
 
	 margin: 2% auto 0 auto;
text-align: right;
      text-shadow: 50px 1px 3px $shadow-color;
}


$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
html, body {
 padding: 5px;
  width: 1000px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color: rgba(255, 255, 255, 0.7);
  background: url(http://localhost/Photos/bg.png)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
</head>
<body>

<h4 class="nidhi">
 <?php echo "WELCOME....:-".$_SESSION ['name']?> 
</h4><div class="sri"><a href="logout.php">Logout</a></div>
<div class="sr"><a href="show.php">MY CART</a></div>
<h1> Products </h1>
<div class="col-md-3">
    <img src="Photos/Luxury-Watch-Wallpaper-1920x1080-Desktop.jpg" height="500" width="600" style="margin:10px">
           <li><h2 class="pj">ARMANI</h2></li>
           <li><h3 class="pj">Rs. 18999</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>ARMANI emporio </li>
                    <li>conograph</li>
                    <li>3 time system</li>
                    <li>3 year battery warrenty</li>
                    <li>1 year all over warenty on this product</li>
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro1.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>    
 </div>
<div class="col-md-3">
    <img src="Photos/christophe.jpg" height="600" width="400" style="margin:10px">
           <li><h2 class="pj">CHRISTOPHE</h2></li>
           <li><h3 class="pj">Rs. 20000</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li> CHRISTOPHE</li>
                    <li>conograph</li>
                    <li>3 time system</li>
                    <li>3 year battery warrenty</li>
                    <li>1 year all over warenty on this product</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro2.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>    
 </div>
<div class="col-md-3">
    <img src="Photos/Bulgari-Octo-Maserati-1.jpg" height="400" width="400" style="margin:10px">
           <li><h2 class="pj">BULGARI</h2></li>
           <li><h3 class="pj">Rs. 22999</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Bulgari-Octo-Maserati</li>
                    <li>conograph</li>
                    <li>3 time system</li>
                    <li>3 year battery warrenty</li>
                    <li>1 year all over warenty on this product</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro3.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
<div class="col-md-3">
    <img src="Photos/rolex-projext-x-stealth.jpeg" height="300" width="550" style="margin:10px">
           <li><h2 class="pj">ROLEX</h2></li>
           <li><h3 class="pj">Rs. 39999</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Rolex-projext-x-stealth</li>
                    <li>ARMY TYPE</li>
                    <li>3 time system</li>
                    <li>3 year battery warrenty</li>
                    <li>1 year all over warenty on this product</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro4.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
<div class="col-md-3">
    <img src="Photos/Shalimar Black2.jpg" height="550" width="500" style="margin:10px">
           <li><h2 class="pj">SHALIMAR</h2></li>
           <li><h3 class="pj">Rs. 10999</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Shalimar Black2</li>
                    <li>LUXORY PERFUME</li>
                    <li>3 time more luxory </li>
                    <li>300ml </li>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro5.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
<div class="col-md-3">
    <img src="Photos/rexam Panache HD_0.JPG" height="820" width="400" style="margin:10px">
           <li><h2 class="pj">REXAM</h2></li>
           <li><h3 class="pj">Rs. 19999</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                     <li>Rexam Panache</li>
                    <li>LUXORY PERFUME</li>
                    <li>5 time more luxory </li>
                    <li>500ml </li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro6.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
<div class="col-md-3">
    <img src="Photos/perfume-ladys-joy-luxury.jpg" height="550" width="500" style="margin:10px">
           <li><h2 class="pj">LADYS-JOY</h2></li>
           <li><h3 class="pj">Rs. 15000</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                     <li>perfume-ladys-joy-luxury</li>
                    <li>LUXORY PERFUME</li>
                    <li>5 time more luxory </li>
                    <li>500ml </li>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro7.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>

</body>
