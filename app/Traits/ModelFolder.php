<?php

namespace App\Traits;

trait ModelFolder
{
    public static function getTableName()
    {
        return ((new self)->getTable());
    }
}
