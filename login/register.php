<?php 
 
include '../connect.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$pass_md5 = md5($password);
$kota = $_POST['kota'];
$telp = $_POST['telp'];
$alasan = $_POST['alasan'];
$image = $_POST['image'];
$kode_mapel = $_POST['kode_mapel'];

$query = "INSERT INTO user (nama, email, password, kota, telp, alasan, image, kode_mapel )
          VALUES ('$nama','$email','$password','$kota','$telp','$alasan','$image','$kode_mapel')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0 )
{
    header("location:login.php");

}
else
{
    echo"Gagal tambah data";
    echo mysqli_error($connect);
}

echo "<a href = 'form-login.php'> Lihat Data </a>";
?>