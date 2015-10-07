<?php
include('header.php');

if (isset($_POST['pass'])) {

  if ($_POST['pass'] == 'secret') {
      echo '<p>Ура, вы вошли в секретную зону!)</p>';
  } else {
      echo '<p>Пароль неправильный, повторите ввод на странице входа: <a href="form.php">Login</a></p>';
  }


} else {
?>

<form action="" method="post">
  <label>Введите пароль: <input name="pass" type="password"></label>
  <input type="submit">
</form>

<?php
}
include('footer.php');
