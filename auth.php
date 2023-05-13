<?php

include('db.php');

if ($_POST['type'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['message'] = 'Welcome '.$_SESSION['name'];
        $_SESSION['message_type'] = 'success';
        header('Location: index.php');
    }else{
        $_SESSION['message'] = 'Email or Password are incorrect';
        $_SESSION['message_type'] = 'danger';
        header('Location: login.php');
    }

}elseif ($_POST['type']== 'register') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'User Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: login.php');

}else{
  echo "error";
  print_r($_POST);
}
// print_r($_POST);

?>
