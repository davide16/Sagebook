<?php
session_start();
include 'database.php';

$nome = $_POST['nome'];
$passwords = $_POST['password'];
$email = $_POST['email'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $conn->prepare("INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$nome','$passwords','$email')");
$stmt->execute();  
}
catch(PDOException $e) {

}
include 'header.php';  ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h2>Complimenti! Ti sei registrato con successo! </h2>
    </section>
 </div>

 <?php
 include 'footer.php';
 ?>
