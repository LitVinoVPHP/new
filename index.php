<?php
  session_start();

  if ($_SESSION['user'] ?? false) {
      header("Location: profile.php");
  } else {
    header("Location: signin.php");
  }
?>