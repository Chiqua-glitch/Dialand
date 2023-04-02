<?php ob_start() ?>
<h1><?= $_SESSION["user"]["username"] ?></h1>
<?php
$content = ob_get_clean();
require VIEWS . "layout.php";
?>