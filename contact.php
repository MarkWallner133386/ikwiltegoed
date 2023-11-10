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

.footercenter{
   display: flex;
    justify-content: center;
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

  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer " >

    <div class="w3-row-padding footercenter" >

      <div class="w3-col s4 ">

        <h4>Contact</h4>

        <p>Questions? </p>

        <form action="/action_page.php" target="_blank">

          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>

          <button type="submit" class="w3-button w3-block w3-black">Send</button>

        </form>

      </div>