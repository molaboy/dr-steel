<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lat = $_POST['latitude'];
  $lon = $_POST['longitude'];
  $to = "bizconnectg@gmail.com";   // your email
  $subject = "New Location Shared";
  $message = "Someone shared their location:\n\nLatitude: $lat\nLongitude: $lon";
  $headers = "From: no-reply@yourdomain.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "✅ Location sent successfully!";
  } else {
    echo "❌ Failed to send email.";
  }
}
?>
