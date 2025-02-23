<?php

if($value!=''){
    
    $url = "works_by_fandom_list.php?page=list";
    $key = "id";
    
    $string = $value;

    $url = $url . "&" . $key . "=" . urlencode(trim($string));
    $value = '<a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($string) . '</a>';
}