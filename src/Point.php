<?php

declare(strict_types=1);

namespace Faicchia\Haversine;

class Point
{
    private float $latitude;
    private float $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        if ($latitude < -90 || $latitude > 90) {
            throw new \InvalidArgumentException(
                message: "Latitude can not be less than -90 or greater than 90",
            );
        }

        if ($longitude < -180 || $longitude > 180) {
            throw new \InvalidArgumentException(
                message: "Longitude can not be less than -180 or greater than 180",
            );
        }

        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public static function new(float $latitude, float $longitude): static
    {
        return new static($latitude, $longitude);
    }
}