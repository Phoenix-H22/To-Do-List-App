<?php
if ($_GET['type'] == 'logout') {
  session_start();
  session_destroy();
  header('Location: login.php');
}else{
    header('Location: index.php');
}
?>