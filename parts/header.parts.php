<!DOCTYPE html>
<html lang="de">
<head>
  <title>Rial Web</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fontawesome/css/all.css" />
  <link rel="stylesheet" href="css/style.css">
  <?= (auth_user()) ? '<link rel="stylesheet" href="css/edit.css" />':'' ?>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.validate.js"></script> 
  <script src="js/index.js"></script>
  <?= ($page === 'login') ? '<script src="js/login.js"></script>':'' ?>

</head>
<body>
<div id="wrapper">
  <?php if (auth_user()) : ?>
    <div id="gemeldet" class="col-12">
    <?php
      $id = auth_id();
      $user_name = db_get("SELECT * FROM `users` WHERE id = :id", [
        'id' => $id,
      ]);
    ?>
      <p> Willkommen!!! <?= e(ucfirst($user_name['name']))?> <?= e(ucfirst($user_name['vorname']))?></p>
      <a href="index.php#pakete" class="btn productmenu">Edit Produkten</a>
      <a href="index.php?page=profil" class="btn profilmenu">Profil einzeigen</a>
      <a href="<?= 'auth/logout.php' ?>" class="btn">Logout</a>
    </div><!--end gemeldet-->         
  <?php endif; ?>
  
  <div id="header" class="row">
    <div id="logo" class="col-2 col-m-12">
      <a href="index.php"><img src="img/logo/logo.svg" alt="logo rialweb"></a>
    </div><!--end logo-->
    <div id="nav" class="col-7 col-m-8 col-l-12">
      <nav>
        <ul>
          <li><a href="index.php" class="<?= empty($page) || $page === 'index' ? 'active' : ''; ?>">Home</a></li>
          <li><a href="index.php?page=wer" class="<?= $page === 'wer' ? 'active' : ''; ?>">Wer sind wir?</a></li>
          <li><a href="index.php?page=leistungen" class="<?= $page === 'leistungen' ? 'active' : ''; ?>">Leistungen</a></li>
          <li><a href="index.php?page=kontakt" class="<?= $page === 'kontakt' ? 'active' : ''; ?>">Kontakt</a></li>
          <?php if (!auth_user()) : ?>
            <li><a href="index.php?page=login" class="<?= $page === 'login' ? 'active' : ''; ?>">Registrieren/Anmelden</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div><!--end nav-->
    <div id="angebot" class="col-3 col-m-4 col-l-12">
      <ul>
        <li> +49 160 1234567</li>
        <li><a href="index.php#pakete" class="btn">Angebot</a></li>
      </ul>
    </div>
  </div><!--end header-->
  