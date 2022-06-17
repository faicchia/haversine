<?php

declare(strict_types=1);

use Faicchia\Haversine\Haversine;
use Faicchia\Haversine\Point;

it('computes the distance in kilometers between two points', function () {
    expect(
        Haversine::kilometers(
            from: Point::new(latitude: 41.902782, longitude: 12.496366), // Rome
            to: Point::new(latitude: 51.509865, longitude: -0.118092)    // London
        )
    )->toBeFloat()->toEqual(1433.47926);
});

it('computes the distance in miles between two points', function () {
    expect(
        Haversine::miles(
            from: Point::new(latitude: 41.902782, longitude: 12.496366), // Rome
            to: Point::new(latitude: 51.509865, longitude: -0.118092)    // London
        )
    )->toBeFloat()->toEqual(890.722441);
});