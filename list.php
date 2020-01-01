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

function setImage($size, $name, $image_name, $season) {
    $type = substr($_SERVER[REQUEST_URI], 1);
    if($size == "large")
        return "<div class=\"large-crop-button\">
                <a href=\"#\" class=\"crop-image $size\">
                    <h3 class=\"two-lines\">VIEW ALL<BR>".strtoupper($season)." ".strtoupper($type)."</h3>
                    <img alt=\"\" src=\"/img/crop/$image_name.jpg\">
                    <div class=\"border\"></div>
                </a>
            </div>";
    else
        return "<a href=\"#\" class=\"crop-image $size\">
                <h3>".strtoupper($name)."</h3>
                <p>".strtoupper($season)." ".strtoupper($type)."</p>
                <img src=\"/img/crop/$image_name.jpg\">
                <div class=\"border\"></div>
            </a>";

}

include($_SERVER['DOCUMENT_ROOT']."/include/breadcrumb.php");
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
    <?php
    include($_SERVER['DOCUMENT_ROOT']."/include/nav.php");
    include($_SERVER['DOCUMENT_ROOT']."/include/add_breadcrumb.php");
    ?>
    <div class="margin page">
        <div class="top-section">
            <h1><?=ucwords($type)?></h1>
            <p>View all crops from various seasons. Click to find more about the <?=$type?>.</p>
        </div>
        <div class="crop-image-container">
            <?php
            $fruit_string = "<div class=\"crop-image-row\">".
                setImage('large', null, 'fruit-group-1', 'spring').
                "<div class=\"multiple-image-container\">".
                    setImage('landscape', 'raspberry', 'raspberries-2', 'spring').
                    setImage('small', 'lemon', 'lemon', 'spring').
                    setImage('small', 'strawberries', 'two-strawberries', 'spring').
                "</div>
            </div>";
            $veg_string = "<div class=\"crop-image-row\">
                                <div class=\"multiple-image-container\">".
                                    setImage('landscape', 'green beans', 'zoomed-green-beans', 'summer').
                                    setImage('small', 'mushrooms', 'mushrooms', 'summer').
                                    setImage('small', 'onion', 'onion', 'summer').
                                "</div>".
                                    setImage('large', null, 'vegetable-group-1', 'summer').
                            "</div>";

            if($type == "vegetables")
                echo $veg_string.$fruit_string;
            else
                echo $fruit_string.$veg_string;
            ?>
        </div>
    </div>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT']."/include/footer.php")
?>
</body>
</html>
<script src="/script/nav.js"></script>
<script>
    $(".inner-nav > a:nth-of-type(" + (navNumber--) + ")").css("color", "#f94414");
    $(".menu-nav > a:nth-last-child(" + (navNumber--) + ")").css({"color": "#f94414", "background": "#356353"});
</script>