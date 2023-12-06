<?php

namespace App\Helpers;

class CalculatedComision
{
    public static function calculateRate($salesAmount)
    {
        if ($salesAmount <= 1000) {
            return 0.01;
        } elseif ($salesAmount <= 5000) {
            return 0.05;
        } else {
            return 0.1;
        }
    }
}
