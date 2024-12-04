<?php

namespace App\Helpers;

class helper
{
    public static function isActiveMenu($url, $className = 'active')
    {
        return request()->is($url) ? $className : '';
    }
}
