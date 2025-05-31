<?php 
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/components/templates/headIndex.component.php';
require_once BASE_PATH . '/components/templates/navIndex.component.php';
require_once BASE_PATH . '/components/templates/footIndex.component.php';
?>

<secion class = "hero">
    <div clas = "hero-content">
        <h1>Welcome to My Website!</h1>
        <p>Click here to see my past review posts.</p>
        <a href = "./page/ReviewPage/index.php" class = "cta-button">Reviews</a>
    </div>
</secion>