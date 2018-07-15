
<?php

include 'connect.php';



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
      <a href="index.php" class="nav-brand">
        <img src="images/mts.png">
      </a>

      <button type="button" class="nav-toggle" data-toggle="collapse" data-target="#navbarMenu">
        <i class="icon-bar icon-white"></i>
      </button>
      <!-- animasi header -->
      <nav id="navbarMenu" class="below-shadow">
        <ul class="nav-menu">
          <li class="active"><a href="index.php" class="link">Beranda</a></li>
          <li><a href="login/form-login.php" class="link">Masuk</a></li>
          <li><a href="galeri.php" class="link">Galeri</a></li>
      
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
        <h2 class="title">METIC</h2>
        <p class="description">
          Moklet Education of Technology and Informatic Club
        </p>
        
      </div>
    </section>


  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
  <h1 class="title">METIC</h1>
    <p class="w3-opacity"><i>We Conquer The world with Technology</i></p>
    <p class="w3-justify">Metic Adalah Salah Satu Sub Organisasi di SMK Telkom Malang yang Bergerak di Bidang Teknologi.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="images/teamwork.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <img src="images/presentation.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <img src="images/connect.png" class="w3-round" alt="Random Name" style="width:60%">
      </div>

    </div>
  </div>
  <img src=" images/tb.png" alt="texture" width="100%">
  <div id="artikel">
        <div class="article">
          <div class="container">
            <!-- <h1 class="title">Lodge Recommendation</h1><hr> -->
            <h1 class="title">KELAS</h1>
            <div class="items-wrapper">
              <div class="item">
                <div class="image" data-source="images/computer.png">
                  <div class="overlay"></div>
                </div>
                <div class="detail">
                  <h3 class="title">Dekstop </h3>
                  <p class="desc">Mempelajari Tentang Membuat Program yang Sistematis Menggunakan Visual Studio Untuk Membuat Data Statistik</p>
                </div>
              </div>
              <div class="item">
                <div class="image" data-source="images/browser.png">
                  <div class="overlay"></div>
                </div>
                <div class="detail">
                  <h3 class="title">Graphic Design</h3>
                  <p class="desc">Mempelajari Tentang Seni Modern yang Menggabungkan Kreativitas Dengan <i>Software</i> Seperti Photoshop,Illustrator,Corel Draw</p>
                  
                </div>
              </div>
              <div class="item">
                <div class="image" data-source="images/binary.png">
                  <div class="overlay"></div>
                </div>
                <div class="detail">
                  <h3 class="title">Networking</h3>
                  <p class="desc">Mempelajari Tentang Perhitungan Subnet,Protokol Jaringan ,dan Penggunaan Terhadap Access Point serta Melakukan
                  Hubungan Jaringan Pada Perangkat</p>
                  
                </div>
              </div>
              <div class="item">
                <div class="image" data-source="images/coding.png">
                  <div class="overlay"></div>
                </div>
                <div class="detail">
                  <h3 class="title">Web Design</h3>
                  <p class="desc">Mempelajari Tentang Mendekorasi website menggunakan HTML(Hypertext Markup Lannguage) dan CSS(Cascading Stylesheet
                  Kemuadian Menggunakan JQuery Untuk Memperunik Desain Website)</p>
                  
                </div>
              </div>
              <div class="item">
                <div class="image" data-source="images/vid.png">
                  <div class="overlay"></div>
                </div>
                <div class="detail">
                  <h3 class="title">Video Editing</h3>
                  <p class="desc">Mempelajari Pembuatan Film Melalui Adobe Premiere,Adobe After Effect,dan Membuat Benda 3D di Blender</p>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <img src=" images/tt.png" alt="texture" width="100%">
      <!-- END of PENGINAPAN -->
  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></buthttps://www.w3schools.com/ton>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Pesan Singkat?</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> SMK Telkom Malang<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: meticspitec@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="act/sm.php" method="post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name"  name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email"  name="email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:600px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(-7.976837, 112.658956);
  var mapOptions= {
    center:myCenter,
    zoom:15, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp0jGp4DWe5PhnLm5il-PnEHXqL8BsetE&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

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
