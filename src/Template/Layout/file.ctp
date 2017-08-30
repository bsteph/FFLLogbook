<?php
/**
 * Created by PhpStorm.
 * User: zkn1axt
 * Date: 8/29/17
 * Time: 11:06 AM
 */
header('Content-type: ' . $file['F4473']['type']);
if(!isset($inpage)) header('Content-Disposition: attachment; filename="'.$file['F4473']['name'].'"');
echo $content_for_layout;
die();
?>