<?php
include 'config.php';
if(isset($_POST['submit'])){
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $loc=$_POST['country'];
  $pen=base64_encode($_POST['subject']);
  $ins="INSERT INTO fdback(firstname,lastname,location,isi) VALUES('$fname','$lname','$loc','$pen')";
  mysqli_query($conn,$ins);
  header('Location:Contact.html');
  echo "<script>alert('Pendapat anda sudah terkirim.');</script>";
}
?>