<?php
// Demo handler for the HTML form assignments.
// This page displays a confirmation without storing submitted personal data.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo "Please submit the form using the form page.";
    exit;
}
$name = htmlspecialchars($_POST["fullname"] ?? $_POST["student"] ?? "Student", ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submitted</title>
</head>
<body>
  <h1>Thank you, <?= $name ?>!</h1>
  <p>Your demonstration form was submitted successfully.</p>
  <p>No information has been stored.</p>
  <a href="assignments/assignment-17.html">Return to Assignment 17</a>
</body>
</html>
