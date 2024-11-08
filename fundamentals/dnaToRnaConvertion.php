<?php
function dnaToRna($str)
{
    return str_replace('T', 'U', $str);
}

echo dnaToRna("GCAT");
