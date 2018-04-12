<?
include("class.Thumbnail.php");
$tn_image = new Thumbnail($_GET['src'], 0, 140, 0);
$tn_image->show();
?>

