<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
  </head>
  <body>
    <!-- PAGE LOADER -->
 
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
          <li><a href="index.php" class="link">Beranda</a></li>
          <li><a href="login/form-login.php" class="link">Masuk</a></li>
          <li class="active"><a href="galeri.php" class="link">Galeri</a></li>
      
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
        <h2 class="title">Galeri</h2>
        
        
      </div>
    </section>
    <!-- PAGE WRAPPER -->
    <div id="page-wrapper">
      <h3 class="title">Beberapa Dokumentasi Saat Diklat</h3>
      <!-- GALLERY -->
      <div class="gallery">
        <div class="items-wrapper">
          <div class="item">
            <div class="image" data-source="gale/i1.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i2.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i3.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i4.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i5.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i6.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i7.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i8.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i9.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i10.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i11.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i12.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i13.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i14.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i15.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i16.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i17.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i18.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i19.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i20.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i21.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i22.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i23.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i24.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i25.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i26.jpg">
            </div>
          </div>
          <div class="item">
            <div class="image" data-source="gale/i27.jpg">
            </div>
          </div>
       
        </div>

        <!-- MODAL IMAGE -->
        <div class="modal">
          <div class="overlay"></div>
          <div class="image" data-source=""></div>
        </div>
        <!-- END of MODAL IMAGE -->
      </div>
      <!-- END of GALLERY -->
      <!-- SUBSCRIBE -->
     

    <!-- JavaScript -->
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <script type="text/javascript">
      $('.gallery .items-wrapper .item .image').click(function (event) {
        var source = $(this).attr('data-source');
        $('.modal .image').css("background", "url('"+ source +"')");
        $('.modal').fadeIn('slow');
      });
      $('.modal .overlay').click(function (event) {
        $(this).parents('.modal').fadeOut('slow');
      });
    </script>
  </body>
</html>
