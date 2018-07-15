<?php

include '../connect.php';
$query = "SELECT kode_mapel, kelas FROM matapelajaran";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/M.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/form-create.css">
<!--===============================================================================================-->
</head>
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
<body onload="myFunctionn()">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt >
					<img src="images/halokes.png" alt="IMG" style=margin-bottom:"100px">
				</div>
                <div class="login100-pic js-tilt" data-tilt>
					<img src="images/metic.png" alt="IMG">
				</div>
                     <br><br><br>
                     
				<form class="login100-form validate-form" action="register.php" method="post">
					<span class="login100-form-title">
						Daftar Metic
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama Required">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-vcard-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="E-Mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password Required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Kota Required">
						<input class="input100" type="text" name="kota" placeholder="Kota Asal">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-pin" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Alasan Required">
						<input class="input100" type="text" name="alasan" placeholder="Alasan Masuk Metic">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Nomor Required">
						<input class="input100" type="text" name="telp" placeholder="No. Telepon">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone" aria-hidden="true"></i>
						</span>
					</div>
                   
					<label for="image">Upload Foto</label>
					<div class="wrap-input100 validate-input" data-validate = "Photo Required">
						<input class="input100" type="file" name="image" placeholder="Alasan Masuk Metic">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file-picture-o" aria-hidden="true"></i>
						</span>
						
					</div>
                    <div class="wrap-input100 validate-input">
                    <select class="input100" name="kode_mapel" id="klas" data-validate = "Kelas Required">
					
            <option value="NULL">Pilih Kelas</option>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $data['kode_mapel']; ?>">
            <?php echo $data['kelas']; ?>
            </option>
            <?php
            }
			?>
			
        </select>
		<span class="focus-input100"></span>
		<span class="symbol-input100">
              <i class="fa fa-institution" aria-hidden="true"></i>
			</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>
					<div class="text-center p-t-40">
						<a class="txt2" href="form-login.php">
							login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	

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
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>