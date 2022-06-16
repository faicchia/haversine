<?php

declare(strict_types=1);

namespace Faicchia\Haversine;

class Haversine
{
    private static function compute(Point $from, Point $to): float
    {
        $earthRadius = 6371;
        $latFrom = deg2rad($from->getLatitude());
        $lngFrom = deg2rad($from->getLongitude());
        $latTo = deg2rad($to->getLatitude());
        $lngTo = deg2rad($to->getLongitude());
        $latDelta = $latTo - $latFrom;
        $lngDelta = $lngTo - $lngFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lngDelta / 2), 2)));
        return round($angle * $earthRadius, 6);
    }

    public static function kilometers(Point $from, Point $to): float
    {
        return static::compute($from, $to);
    }

    public static function miles(Point $from, Point $to): float
    {
        return static::compute($from, $to) * 0.621371;
    }
}