<?php
$type = substr($_SERVER[REQUEST_URI], 1);
switch ($type) {
    case "fruit":
        echo "<script>var navNumber = 5</script>"; // for nav coloring
        break;
    case "vegetables":
        echo "<script>var navNumber = 4</script>";
        break;
    default:
        die(include($_SERVER['DOCUMENT_ROOT']."/include/404.php"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>McIntire Fruit</title>
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/head.php")?>
    <link rel="stylesheet" type="text/css" href="/css/list.css">
</head>
<body>

<div class="content">
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/nav.php")?>
    <div class="margin page">
        <h1><?=ucwords($type)?></h1>
        <div class="crop-image-container">
            <div class="crop-image-row">
                <div class="large-crop-button">
                    <img src="https://static01.nyt.com/images/2018/05/23/dining/23fruit/23fruit-articleLarge.jpg?quality=75&auto=webp&disable=upscale">
                </div>
                <div class="multiple-image-container">
                    <img class="landscape" src="https://www.rebelsbrewery.it/wp-content/uploads/2018/06/Summer-Fruits-To-Keep-You-Cool-This-Season.jpg">
                    <img src="http://rivertea.com/blog/wp-content/uploads/2013/07/strawberries.jpg">
                    <img src="https://www.thespruceeats.com/thmb/dxd9xDeDbNWYA1qJ3VHjZfdE9zM=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-962872648-ee237477599f439ba6b3a4db51c980ae.jpg">
                    <img src="https://fridgefresh.com/wp-content/uploads/2019/03/FreshFridge-optimized-1080x675.jpg">
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="/script/nav.js"></script>
<script>
    $(".inner-nav > a:nth-of-type(" + (navNumber--) + ")").css("color", "#f94414");
    $(".menu-nav > a:nth-last-child(" + (navNumber--) + ")").css({"color": "#f94414", "background": "#356353"});
</script>