
<?php

include 'connect.php';
session_start();

if(!(isset($_SESSION['user'])))
{
    header("location: login/form-login.php");
}
?>
<!DOCTYPE html>
<html>
<title>Metic</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/M.png"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  var message="Need Something?Email:hafiz.nr5758@gmail.com"
  function clickIE4(){
    if(event.button==2){
      alert(message);
      return false;
    }
  }
  function clickNS4(e){
    if(document.layers||document.getElementById&&!document.all){
      if(e.which==2||e.which==3){
        alert(message);
        return false;
      }
    }
  }
  if(document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;
  }else if(document.all&&!document.getElementById){
    document.onmousedown=clickIE4;
  }
  document.oncontextmenu=new Function("alert(message);return false");
</script>
<body>

<header class="">
      <!-- <a href="index.html" class="nav-brand">WEB</a> -->
      <a href="index.html" class="nav-brand">
        <img src="images/mts.png">
      </a>

      <button type="button" class="nav-toggle" data-toggle="collapse" data-target="#navbarMenu">
        <i class="icon-bar icon-white"></i>
      </button>
      <!-- animasi header -->
      <nav id="navbarMenu" class="below-shadow">
        <ul class="nav-menu">
          <li class="active"><a href="login/logout.php" class="link">logout</a></li>

        </ul>
      </nav>
      
    </header>
    <!-- SEARCH -->
   
    <!-- END of SEARCH -->
    <!-- END of HEADER MENU -->
    <!-- INTRO PARALLAX -->
    <section class="intro">
      <div class="overlay"></div>
      <div class="intro-content">
        <h2 class="title" style="font-size: 40px;">Hai <?php echo $_SESSION ['user']; ?></h2>
        <h4 class="title" style="font-size: 25px;">SELAMAT!!! Anda Telah Menjadi Anggota Metic'27</h2>
        <p class="description">
         Lihat Kebawah Untuk Melihat Informasi
        </p>
        <button onclick="scrollDown(this)" data-target="#band" class="btn-scroll">
          <i class="fas fa-chevron-down"></i>
        </button>
      </div>
    </section>


  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
  <h1 class="title">QR Code</h1>
    <p class="w3-opacity"><i>Scan Kode Qr Dibawah ini Untuk Bergabung di grup Metic,dan Bisa juga lewat link<a id="red" href="https://chat.whatsapp.com/ASqwrz4bo0uEpoZJKcG63w">Klik Disini</a> </i></p>
    
    <div class="w3-row ">
      <div class="w3-first">
        <img src="images/meticwa.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:40%">

        <p class="w3-opacity"><i>Setelah itu Kalian Diwajibkan Untuk mencetak dan mengisi form pernyataan <a id="red" href="https://drive.google.com/file/d/1huSftiI00WSVxCp2XMTuoOyNhvuJcNOL/view?usp=sharing">unduh disini</a></i></p>
      </div>
      <!-- <div class="w3-third">
        <img src="images/presentation.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <img src="images/connect.png" class="w3-round" alt="Random Name" style="width:60%">
      </div> -->

    </div>
  </div>
  <img src=" images/tb.png" alt="texture" width="100%">
 
      <!-- END of PENGINAPAN -->
  <!-- Ticket Modal -->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
 
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-envelope w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Metic Moklet</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	    <script>
var myVar;

function myFunctionn() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


</script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/main.js" charset="utf-8"></script>

</body>
</html>
