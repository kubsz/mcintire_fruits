<?php
$type = substr($_SERVER[REQUEST_URI], 1);
switch ($type) {
    case "fruit":
    case "vegetables":
        break;
    default:
        die(include($_SERVER['DOCUMENT_ROOT']."/include/404.php"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>McIntire Fruit</title>
    <link rel="stylesheet" type="text/css" href="/css/our-farms.css">
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/head.php")?>
</head>
<body>

<div class="content">
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/nav.php")?>
    <div class="margin page">
        <?=$type?>
    </div>
</div>
</body>
</html>
<script src="/script/nav.js"></script>
<script>
    $(".inner-nav > a:nth-of-type(3 )").css("color", "#f94414");
</script>