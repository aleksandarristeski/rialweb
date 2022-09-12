<?php 
$produkts = db_all('SELECT * FROM produkts');
if(auth_id()) {
  $profil = db_get("SELECT * FROM `users` WHERE id = :id", ['id' => $id]);
}
if (request_is('post')) {
  $action = request('action');
  var_dump($_POST);
  if ($action === 'delete') {
    $pid = (int)$_POST['produkt_id'];
    $produkt = db_get("SELECT * FROM `produkts` WHERE produkt_id = :produkt_id", [
      'produkt_id' => $pid,
    ]);
        $stmt = db_statement("DELETE FROM `produkts` WHERE produkt_id = :produkt_id", 
        [ 'produkt_id' => $pid, ] 
        );
        redirect('index.php#pakete');
  }

  if ($action === 'create') {
    $produkt_name = "Produkt Name";
    $product_besch = "With all your customers via all conversation channels in one central dashboard.";
    $price = "ab >PRICE< €";
    $ja = "ja";
    
    $cms_besch ="CMS";
    $site_besch ="bis 12 Sitepage";
    $speicher_besch ="2GB Speicher";
    $dom_besch ="1 Domain";
    $ssl_besch ="Free SSL";
    $seo_besch ="SEO Optimierung";
    $responsiv_besch ="Responsive Desing";
    $email_besch ="bis 1 Email Adresse";
    $bild_besch ="bis 5 Bilder";
    $formular_besch ="Kontakt Formular";

    db_insert('produkts', [
      'user_id' => auth_id(),
      'produkt_name' => $produkt_name,
      'product_besch' => $product_besch,
      'produkt_price' => $price,
      'cms_inc' => $ja,
      'cms_besch' => $cms_besch,
      'site_inc' => $ja,
      'site_besch' => $site_besch,
      'speicher_inc' => $ja,
      'speicher_besch' => $speicher_besch,
      'dom_inc' => $ja,
      'dom_besch' => $dom_besch,
      'ssl_inc' => $ja,
      'ssl_besch' => $ssl_besch,
      'seo_inc' => $ja,
      'seo_besch' => $seo_besch,
      'responsiv_inc' => $ja,
      'responsiv_besch' => $responsiv_besch,
      'email_inc' => $ja,
      'email_besch' => $email_besch,
      'bild_inc' => $ja,
      'bild_besch' => $bild_besch,
      'formular_inc' => $ja,
      'formular_besch' => $formular_besch,
    ]);
    redirect('index.php#pakete');
  }
}
?>
<div id="content">
    <div id="hallo" class="row">
      <div id="halloleft" class="col-6">
        <img src="img/media/halloline.png" alt="connect line">
        <span class="inred">Hallo,</span>
        <h1>Wir helfen Menschen, ihre Ideen zum Leben zu erwecken</h1>
        <p class="clasforp">
          Ein talentiertes Team, das Sie auf Ihrem Weg zur Entwicklung nützlicher und benutzerfreundlicher Produkte unterstützt
        </p>
        <div id="hallobtn">
          <a href="index.php#pakete" class="btn">Angebot</a>
          <a href="#" class="bold">unsere Dienstleistungen </a>
          <img src="img/media/feather_arrow-right.png" alt="">
        </div>
      </div>
      <div id="halloright" class="col-6 col-m-12">
        <img src="img/media/team.png" alt="team foto" class="col-m-6">
        <img src="img/media/dotik.png" alt="dots">
      </div>
    </div><!--end hallo-->
    <div id="pakete" class="row">
      <h2 class="col-12 col-m-12">Bereit für den Einstieg?</h2>
      <p class="col-12 col-m-12">Wählen Sie das Paket, das zu Ihnen passt</p>
      <?php foreach($produkts AS $produkt): // var_dump($produkt['produkt_id'])?>
            
        <div class="col-3 col-m-3 col-l-5">
        <?php if(auth_id()):?>
          <form class="help_btn" action="?" method="post">
            <input type="hidden" name="produkt_id" value="<?= e($produkt['produkt_id'])?>">
            <div id="produkt_id-<?= e($produkt['produkt_id'])?>" class="btn btndelete col-12"><button class="loesenbtn" type="submit" name="action" value="delete">Produkt löschen</button></div>
            <div id="neue_produkt_<?= e($produkt['produkt_id'])?>" class="btn btnneue col-12"><button class="neuebtn" type="submit" name="action" value="create">Neue erstellen</button></div>
          </form>
        <?php endif;?>
          <h3 id="produkt_name-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit"  contentEditable="true"<?php endif;?>><?= e($produkt['produkt_name']) ?></h3>
          <p id="product_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit"  contentEditable="true"<?php endif;?>><?= e($produkt['product_besch']) ?></p>
          <span id="produkt_price-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>contentEditable="true"<?php endif;?> class="price <?php if(auth_id()):?>edit<?php endif;?>" ><?= e($produkt['produkt_price']) ?></span>
          <a href="index.php#pakete" class="btn">kostenlose Anfrage</a>
          <ul>
       


            <li><?= e($produkt['cms_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="cms_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= ($produkt['cms_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="cms_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['cms_besch']) ?></span>
            </li>

            <li><?= e($produkt['site_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="site_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= ($produkt['site_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="site_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['site_besch']) ?></span>
            </li>

            <li><?= e($produkt['speicher_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="speicher_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['speicher_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="speicher_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['speicher_besch']) ?></span>
            </li>

            <li><?= e($produkt['dom_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="dom_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['dom_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="dom_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['dom_besch']) ?></span>
            </li>

            <li><?= e($produkt['ssl_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="ssl_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['ssl_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="ssl_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['ssl_besch']) ?></span>
            </li>

            <li><?= e($produkt['seo_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="seo_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['seo_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="seo_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['seo_besch']) ?></span>
            </li>

            <li><?= e($produkt['responsiv_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="responsiv_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['responsiv_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="responsiv_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['responsiv_besch']) ?></span>
            </li>

            <li><?= e($produkt['email_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="email_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['email_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="email_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['email_besch']) ?></span>
            </li>

            <li><?= e($produkt['bild_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="bild_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['bild_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="bild_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['bild_besch']) ?></span>
            </li>

            <li><?= e($produkt['formular_inc']) == "ja" ? '<i class="fa-solid fa-check"><!----></i>' : '<i class="fa-solid fa-xmark"><!----></i>' ?>
              <?php if(auth_id()):?>
                <input id="formular_inc-<?= e($produkt['produkt_id'])?>" class="cedit" type="checkbox" <?= e($produkt['formular_inc']) == "ja" ? 'checked' : '' ?> >
              <?php endif;?>
              <span id="formular_besch-<?= e($produkt['produkt_id'])?>" <?php if(auth_id()):?>class="edit" contentEditable="true"<?php endif;?>><?= e($produkt['formular_besch']) ?></span>
            </li>
            
          </ul>
        </div>
       
      <?php endforeach;?>
    </div><!--end pakete-->
    <div id="dinst" class="row">
      <span class="inred">Die von uns angebotenen Dienstleistungen</span>
      <h2 class="col-9">Wir bieten eine Vielzahl von Dienstleistungen an, um Ihnen beim Wachstum und Aufbau Ihrer Marke zu helfen und Sie bei der Entwicklung Ihrer Produkte zu unterstützen</h2>
      <div class="col-3 col-m-4 col-l-6">
        <h3>Web/App Development</h3>
        <p>Unser Team wird die Spitzentechnologien verwenden, um Ihr Produkt zu entwickeln</p>
        <a href="#">Lern mehr</a>
      </div>
      <div class="col-3 col-m-4 col-l-6">
        <h3>UI/UX Design ,Web Design</h3>
        <p>Es ist uns wichtig, dass Ihr Produkt sauber und benutzerfreundlich ist</p>
        <a href="#">Lern mehr</a>
      </div>
      <div class="col-3 col-m-4 col-l-6">
        <h3>Marketing Digital,Social Media </h3>
        <p>Erweitern Sie Ihre Community mit Ihrem Inbound-Marketing und Social-Media-Marketing</p>
        <a href="#">Lern mehr</a>
      </div>
      <div class="col-3 col-m-4 col-l-6">
        <h3>Brand Stratgey &Art Diraction</h3>
        <p>Helfen Sie dabei, eine einzigartige Marke zu schaffen, die im Kopf der Kunden bleibt</p>
        <a href="#">Lern mehr</a>
      </div>
      <div class="col-3 col-m-4 col-l-6">
        <h3>Visual Identity Logo Brand</h3>
        <p>Ein Logo kann einen großen Unterschied machen, unser Team hilft Ihnen dabei</p>
        <a href="#">Lern mehr</a>
      </div>
    </div><!--end dinst-->
    <div id="team" class="row">
      <div class="row-full"> <!-- Full width container --></div>
      <div id="teamleft" class="col-6 col-m-6">
        <span class="inred">Das Team hinter RialWeb</span>
        <h2>Ein Team von kreativen Who Excited, um Ihnen bei Ihrer Idee zu helfen</h2>
        <p class="clasforp">Unser Team aus Entwicklern digitaler Produkte und Tch Bring Skills bringt Ihre Idee auf die nächste Stufe und hilft Ihnen bei Ihrem Produkt</p>
      </div>
      <div id="teamright" class="col-6 col-m-6">
        <img src="img/media/avatar1.png" alt="preson name">
        <img src="img/media/avatartitik.png" alt="avatar dots">
        <h3>Name und Vorname</h3>
        <p>Founder</p>
        <div class="l-r">
          <img src="img/media/groupR10.png" alt="arrow left">
          <img src="img/media/groupL9.png" alt="arrow right">
        </div>
      </div>
    </div><!--end team-->
    <?php require_once 'parts/testmonial.parts.php';  ?>
  </div><!--end content-->
  