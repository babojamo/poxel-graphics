<?php

namespace App\Helpers;

class Slugger
{
    public static function makeSlug($text) {
        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $text));
    }
}
