<?php
if (!auth_user()) {
  redirect('index.php');
}
  $id = auth_id();
  $user_daten = db_get("SELECT * FROM `users` WHERE id = :id", [
        'id' => $id,
  ]);
?>
<div id="profil_zeigen">
<h2>Personal Daten</h2>
  <ul>
    <li>Anrede: <?= e(ucfirst($user_daten['anrede']))?></li>
    <li>Name: <?= e(ucfirst($user_daten['name']))?></li>
    <li>Vorname: <?= e(ucfirst($user_daten['vorname']))?></li>
    <li>Lieblingsfarbe: <?= e(ucfirst($user_daten['slfarbe']))?></li>
  </ul>
  <h2>Interesse</h2>
  <ul>
    <li><?= e($user_daten['cbhtml']) == "htmlcss" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>HTML</li>
    <li><?= e($user_daten['cbjs']) == "js" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>JavaScript</li>
    <li><?= e($user_daten['cbphp']) == "php" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>PHP</li>
    <li><?= e($user_daten['cbsql']) == "sql" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>SQL</li>
    <li><?= e($user_daten['cbtypo']) == "typo" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>TYPO3</li>
    <li><?= e($user_daten['cbwordpress']) == "wordpress" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>WORDPRESS</li>
  </ul>
</div>
