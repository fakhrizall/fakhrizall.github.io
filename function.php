<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function register($data)
{

  global $conn;

  $email = strtolower(stripslashes($data["email"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);
  //cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
      alert('Konfirmasi Password Tidak Sesuai!');
    </script>";
    return false;
  }
}
