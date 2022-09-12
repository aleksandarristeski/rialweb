<?php

require_once 'helfer.php';
$page = $_GET['page'] ?? 'index';

require_once 'parts/header.parts.php';

$pageFile = 'parts/' . $page . '.parts.php';

if(file_exists($pageFile)) {
  require_once $pageFile;
}
else {
  require_once 'parts/index.parts.php';
}


require_once 'parts/footer.parts.php';