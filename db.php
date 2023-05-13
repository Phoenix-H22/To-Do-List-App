<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'to_do'
) or die(mysqli_error($mysqli));

?>
