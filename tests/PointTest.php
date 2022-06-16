<?php

declare(strict_types=1);

use Faicchia\Haversine\Point;

it('can create a Point', function () {
    expect(
        Point::new(latitude: 41.902782, longitude: 12.496366),
    )->toBeInstanceOf(Point::class);
});

it('throws an InvalidArgument exception if passed in latitude is less than -90', function () {
    Point::new(latitude: -100, longitude: 12.496366);
})->throws(
    exception: InvalidArgumentException::class,
    exceptionMessage: "Latitude can not be less than -90 or greater than 90",
);

it('throws an InvalidArgument exception if passed in latitude is greater than 90', function () {
    Point::new(latitude: 100, longitude: 12.496366);
})->throws(
    exception: InvalidArgumentException::class,
    exceptionMessage: "Latitude can not be less than -90 or greater than 90",
);

it('throws an InvalidArgument exception if passed in longitude is less than -180', function () {
    Point::new(latitude: 41.902782, longitude: -200);
})->throws(
    exception: InvalidArgumentException::class,
    exceptionMessage: "Longitude can not be less than -180 or greater than 180",
);

it('throws an InvalidArgument exception if passed in longitude is greater than 180', function () {
    Point::new(latitude: 41.902782, longitude: 200);
})->throws(
    exception: InvalidArgumentException::class,
    exceptionMessage: "Longitude can not be less than -180 or greater than 180",
);