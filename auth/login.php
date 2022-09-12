<?php

require_once '../helfer.php';
if (auth_user()) {
  redirect('../index.php?page=profil');
}
if (request_is('post')&& !empty(request('email')) && !empty(request('password_login'))) {
  $email = e(request('email'));
  $password = e(request('password_login'));

  if (!$errors) {
    $user = db_get('SELECT * FROM users WHERE email = :email', [
      'email' => $email,
      ]);

    if (!$user) {
      // redirect(BASE_URL.'index.php?page=login');
      $errors['email'] = 'Incorrect Daten. (E)';
      header( "refresh:2;url=../index.php?page=login" );
    }

    if (!$errors) {
      if (!password_verify($password, $user['password'])) {
        // redirect(BASE_URL.'index.php?page=login');
        $errors['password_login'] = 'Incorrect Daten. (P)';
        header( "refresh:2;url=../index.php?page=login" );
      }
    }

    if (!$errors) {
      login([
        'id' => $user['id'],
        'email' => $user['email'],
      ]);
      redirect('../index.php');
    }
  } 
} else {
  redirect('../index.php?page=login');
}
// var_dump( $_SESSION);
// var_dump($errors);
?>
<div class="col-12 err">
  <label for="errors1" ></label>
  <p><?= error_for('email', $errors) ?></p>
  <p><?= error_for('password_login', $errors) ?></p>
  <p>
    <a href="<?= '../index.php?page=login' ?>">Probieren Sie nochmal: Redirect in 2 Secunden.....</a>
  </p>
</div>