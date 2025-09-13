<?php
// Decode values
$firstName  = urldecode($_GET['firstName'] ?? '');
$middleName = urldecode($_GET['middleName'] ?? '');
$lastName   = urldecode($_GET['lastName'] ?? '');
$contact    = urldecode($_GET['contact'] ?? '');
$email      = urldecode($_GET['email'] ?? '');
$course     = urldecode($_GET['course'] ?? '');
$batch      = urldecode($_GET['batch'] ?? '');
$studentId  = urldecode($_GET['studentId'] ?? '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Record</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h2>Student Record</h2>
    <p><strong>First Name:</strong> <?= $firstName ?></p>
    <p><strong>Middle Name:</strong> <?= $middleName ?></p>
    <p><strong>Last Name:</strong> <?= $lastName ?></p>
    <p><strong>Contact No.:</strong> <?= $contact ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Batch:</strong> <?= $batch ?></p>
    <p><strong>ID:</strong> <?= $studentId ?></p>
  </div>
</body>
</html>
