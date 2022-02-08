<?php
function RemoveSpecialChar($str)
{
    $res = preg_replace('/[^A-Za-z0-9]+/', '', $str);
    return $res;
}
?>