<?php

$user1 = "dappcode";
$password = "123";

if ( isset($_POST['submit'] )){

  if($_POST['nama'] == 'dappcode' && 
    $_POST['password'] == '123') {
  header('Location: Login_sukses.php' );
} else {
  header('Location: login_gagal.php' );
  }
}

?>

<form action=" " method="post">

  <input type="text" name="nama">
  <input type="password" name="password">
  <input type="submit" name="submit">

</form>