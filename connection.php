<?php
$con = mysqli_connect('localhost', 'root', '', 'youtube');
if ($con != false) {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
      echo "Please fill in all fields!";
    } else {
      $query = "INSERT INTO `users` (`userID`, `username`, `password`) VALUES (NULL, '$username', '$password');";
      if (mysqli_query($con, $query)) {
        echo "Inserted Successfully!";
        header('Location: home.php');
        exit();
      } else {
        echo "Error: " . mysqli_error($con);
      }
    }
  }
} else {
  echo 'Failed to connect';
}
?>