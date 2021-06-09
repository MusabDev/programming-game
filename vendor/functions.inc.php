<?php

// This function for getting random programming language
function get_random_programming_languages($type, $limit="", $attr="") {
    if ($limit <= 1) {
        $limit = 2;
    }
    if ($limit > 10) {
        $limit = 10;
    }
    $programming_lang = array("PHP", "JavaScript", "HTML", "CSS", "C++", "Python", "Ruby", "Java", "Go", "Swift");
    $random = array_rand($programming_lang, $limit);
    for ($i=0; $i < $limit; $i++) {
        if ($type == "button") {
            echo "<button $attr>" . $programming_lang[$random[$i]] . "</button>";
        }
    }
}