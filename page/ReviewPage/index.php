<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/components/templates/reviewPageTemplates/headReview.component.php';
require_once BASE_PATH . '/components/templates/reviewPageTemplates/navReview.component.php';
require_once BASE_PATH . '/components/templates/reviewPageTemplates/footReview.component.php';

require_once BASE_PATH . '/handlers/data.php';
require_once BASE_PATH . '/components/templates/cards/gameCard.component.php';

$gameList = $games;
?>