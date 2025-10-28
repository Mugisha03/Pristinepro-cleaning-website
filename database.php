<?php 
$host = "localhost";
$user = "root";       // change to your DB user
$pass = "";           // change to your DB password
$db = "cleaning_service";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>
 !-- ✅ Header Section -->
  <section class="py-20 bg-blue-50 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Our Professional Cleaning Services</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">
      From cozy homes to busy offices, SparklePro delivers spotless results with care and reliability.
    </p>
  </section>