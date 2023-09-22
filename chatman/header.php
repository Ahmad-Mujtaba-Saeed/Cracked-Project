<?php

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
  // Automatically log the user in
  $username = $_COOKIE['username'];
  $pwd = $_COOKIE['password'];
  // Authenticate the user with the provided credentials
}

require_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>cracked</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="../index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>