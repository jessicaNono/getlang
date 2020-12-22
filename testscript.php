<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $langs = ["de", "fr", "es", "en"];
    $defaultlang = "";
    if(!in_array($lang, $langs)){
        $defaultlang = "fr";
    }else{
        $defaultlang = "en";
    }
    echo $defaultlang;
?>