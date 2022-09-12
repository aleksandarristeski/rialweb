<?php

require_once '../helfer.php';

if (auth_user()) {
    redirect('../index.php');
}
// var_dump($_POST);

if (request_is('post') && (!auth_id()) && !empty(request('anrede'))&& !empty(request('email')) && !empty(request('farbe')) && !empty(request('password')) ) {
  $anrede = e(request('anrede'));
  $name = e(request('name'));
  $vorname = e(request('vorname'));
  $email = e(request('email'));
  $farbe = e(request('farbe'));
  $tema1 = e(request('tema1'));
  $tema2 = e(request('tema2'));
  $tema3 = e(request('tema3'));
  $tema4 = e(request('tema4'));
  $tema5 = e(request('tema5'));
  $tema6 = e(request('tema6'));
  $password_reg = e(request('password'));
   

  if (!$errors) {
    $user = db_get('SELECT * FROM users WHERE email = :email', [
            'email' => $email,
    ]);

  	if ($user) {
    $errors['email'] = 'Diese email ist registriert.';
    }
    header( "refresh:2;url=../index.php?page=login" );
  }
  if (!$errors) {
    db_insert('users', [
              'anrede' => $anrede,
              'name' => $name,
              'vorname' => $vorname,
              'email' => $email,
              'slfarbe' => $farbe,
              'cbhtml' => $tema1,
              'cbjs' => $tema2,
              'cbphp' => $tema3,
              'cbsql' => $tema4,
              'cbtypo' => $tema5,
              'cbwordpress' => $tema6,
              'password' => password_hash($password_reg, PASSWORD_DEFAULT),
              ]);
  }
}else {
  redirect('../index.php');
}

?>
<div class="col-12 err">
  <label for="errors1" ></label>
  <p><?= error_for('email', $errors) ?></p>
  <?php if (!$errors): ?>
    <p>Success Registriert!!!</p>
  <?php else: ?>
    <p><a href="<?= 'index.php?page=login' ?>">Diese email ist schon registriert!!! Probieren Sie mit andere Email Adresse nochmal</a></p>
  <?php endif; ?>
</div>