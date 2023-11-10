

<!DOCTYPE html>
<html>

<head>

<title>Smitcards</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.w3-sidebar a {font-family: "Roboto", sans-serif}

body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

.w3-redscale, .w3-grayscale {
    filter: none;
}

.w3-right{
margin-top: 5px;
}

element.style {
    width: 97%;
    margin-bottom: 5px;
}

.w3-blue-smit{
background-color: #003cfe;
}

.detailCard{
display: flex;
justify-content: start;
}

.detailCard img{
width: 500px;
margin-right:  10px;
}
</style>

</head>

<body class="w3-content" style="max-width:500000000px">

 

 

<!-- Navbar (sit on top) -->

<div class="w3-centre">

  <div class="w3-bar w3-white w3-card" id="myNavbar">

    <a href="#home"class="w3-left"> <img src="logo.png" style="width:25%"></a>



    <div class="w3-right w3-hide-small">

      <a href="index.php" class="w3-bar-item w3-button">HOME</a>

      <a href="allcards.php" class="w3-bar-item w3-button"style="width:50%><i class="fa fa-th"></i> All CARDS</a>

      

      <a href="subschribe.php" class="w3-bar-item w3-button"style="width:10%><i class="fa fa-usd"></i> SUBSCRIBE</a>

      <a href="contact.php" class="w3-bar-item w3-button"style="width:10%><i class="fa fa-envelope"></i> CONTACT</a>

    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

 

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">

      <i class="fa fa-bars"></i>

    </a>

  </div>

</div>
<div>
<?php
$card = $_GET["card"];
if($card == "ps10")
{
?>
<div class="detailCard">
 <div>
 	<img src="playstation_10.png">
 </div>
 <div>
 	<h2>PlayStation €10 </h2>
 <p>1. Ga naar de PlayStation Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=ps10"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>
</div>
 




<?php
}elseif($card=="ps100"){
?>



<?php
}

?>

</div>


</div>
<div>
<?php
$card = $_GET["card"];
if($card == "ps100")
{
?>
<div class="detailCard">
 <div>
 	<img src="playstation_100.png">
 </div>
 <div>
 	<h2>PlayStation €100 </h2>
 	 <p>1. Ga naar de PlayStation Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=ps100"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>
</div>

 




<?php
}elseif($card=="ps100"){
?>



<?php
}

?>

</div>



</div>
<div>
<?php
$card = $_GET["card"];
if($card == "xb10")
{
?>
<div class="detailCard">
 <div>
 	<img src="xbox_10.png">
 </div>
 <div>
 	<h2>Xbox €10 </h2>
 	 <p>1. Ga naar de Xbox Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=xb10"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>
</div>

 




<?php
}elseif($card=="xb100"){
?>



<?php
}

?>

</div>
 
 
 
 
</div>
<div>
<?php
$card = $_GET["card"];
if($card == "xb50")
{
?><div class="detailCard">
 <div>
 	<img src="xbox_50.png">
 </div>
 <div>
 	<h2>Xbox €50 </h2>
 	 	 <p>1. Ga naar de Xbox Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=xb50"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>
</div>
 





 




<?php
}elseif($card=="gp10"){
?><div class="detailCard">
 <div>
 	<img src="google_play_10.png">
 </div>
 <div>
 	<h2>Google Play €10 </h2>
 	 <p>1. Ga naar de Google Play Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=gp10"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>



<?php
}

?>

</div>


</div>
<div>
<?php
$card = $_GET["card"];
if($card == "gp10")
{
?>
 
 




<?php
}elseif($card=="gp100"){
?>



<?php
}

?>

</div>



</div>
<div>
<?php
$card = $_GET["card"];
if($card == "gp100")
{
?><div class="detailCard">
 <div>
 	<img src="google_play_100.png">
 </div>
 <div>
 	<h2>Google Play €100</h2>
 	 	 <p>1. Ga naar de Google Play Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=gp100"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>

 




<?php
}elseif($card=="gp100"){
?>



<?php
}

?>

</div>





</div>
<div>
<?php
$card = $_GET["card"];
if($card == "ap10")
{
?><div class="detailCard">
 <div>
 	<img src="apple_10.png">
 </div>
 <div>
 	<h2>Apple €10</h2>
 		 <p>1. Ga naar de Apple Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=ap10"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>
 
 




<?php
}elseif($card=="ap10"){
?>



<?php
}

?>

</div>



</div>
<div>
<?php
$card = $_GET["card"];
if($card == "ap100")
{
?><div class="detailCard">
 <div>
 	<img src="apple_100.png">
 </div>
 <div>
 	<h2>Apple €100 </h2>
 	 <p>1. Ga naar de Apple Store en selecteer je profiel bovenaan het scherm.
</p>
	<p>2. Selecteer Codes inwisselen uit het vervolgkeuzemenu.
</p>
	<p>3. Voer de code zorgvuldig in en selecteer Inwisselen. Het tegoed of de content wordt toegepast op je account.
</p>
<p> <a href="betaling.php?card=ap100"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>

</p>
 </div>

 




<?php
}elseif($card=="ap100"){
?>



<?php
}

?>

</div>
  <!-- Footer -->

  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">

    <div class="w3-row-padding">

      <div class="w3-col s4">

        <h4>Contact</h4>

        <p>Questions? Go ahead.</p>

        <form action="/action_page.php" target="_blank">

          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>

          <button type="submit" class="w3-button w3-block w3-black">Send</button>

        </form>

      </div>

 

      <div class="w3-col s4">

        <h4>About</h4>

        <p><a href="#">About us</a></p>

        <p><a href="#">We're hiring</a></p>

        <p><a href="#">Support</a></p>

        <p><a href="#">Find store</a></p>

        <p><a href="#">Shipment</a></p>

        <p><a href="#">Payment</a></p>

        <p><a href="#">Gift card</a></p>

        <p><a href="#">Return</a></p>

        <p><a href="#">Help</a></p>

      </div>

 

      <div class="w3-col s4 w3-justify">

        <h4>Store</h4>

        <p><i class="fa fa-fw fa-map-marker"></i>Smitcards</p>

        <p><i class="fa fa-fw fa-phone"></i>+31 639029302</p>

        <p><i class="fa fa-fw fa-envelope"></i> Smitcards@mail.com</p>

        <h4>We accept</h4>

      <p><i class="fa fa-fw fa-credit-card"></i> Ideal</p>

        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <p><i class="fa fa-fw fa-credit-card"></i> PayPal</p>

        <br>

        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>

        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>

        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>

        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>

        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>

        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>

      </div>

    </div>

  </footer>

 


 

  <!-- End page content -->

</div>

 

<!-- Newsletter Modal -->

<div id="newsletter" class="w3-modal">

  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">

    <div class="w3-container w3-white w3-center">

      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>

      <h2 class="w3-wide">NEWSLETTER</h2>

      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>

      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>

      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>

    </div>

  </div>

</div>

 

 



</script>

 

</body>

</html>