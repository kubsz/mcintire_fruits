<?php

if($location = substr(dirname($_SERVER['REQUEST_URI']), 1))
    $dirlist = explode('/', $location);
else
    $dirlist = array();

$count = array_push($dirlist, basename($_SERVER['REQUEST_URI']));
$address = 'http://'.$_SERVER['HTTP_HOST'];

$breadcrumb = "<a class='link' href='".$address."'>Home</a>";

for($i = 0; $i < $count; $i++) {
//    $dirlist[$i] = str_replace("item", "items", $dirlist[$i]);
//    $dirlist[$i] = str_replace("itemss", "items", $dirlist[$i]);


    if(is_numeric($dirlist[$i]))
        $i++;

//    $dirlist[$i] = str_replace("family", "families", $dirlist[$i]);

    if($i == ($count - 1))
        $breadcrumb .= " / <a>".str_replace("-", " ", ucwords($dirlist[$i]))."</a>";
    else if($dirlist[$i] == "user")
        $breadcrumb .= "";
    else
        $breadcrumb .= " / <a class='link' href='".($address .= "/".$dirlist[$i])."'>".str_replace("-", " ", ucwords($dirlist[$i]))."</a>";
}
if($_SERVER['REQUEST_URI'] == "/")
    $breadcrumb = "<a>Home</a>";
?>