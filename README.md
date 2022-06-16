# Haversine

Yet another Haversine formula service.

## Installation

```bash
composer require faicchia/haversine
```

## Usage

```php
$distance = Haversine::kilometers(
    from: Point::new(latitude: 41.902782, longitude: 12.496366), // Rome
    to: Point::new(latitude: 51.509865, longitude: -0.118092)    // London
);
// 1433.47926

$distance = Haversine::miles(
    from: Point::new(latitude: 41.902782, longitude: 12.496366), 
    to: Point::new(latitude: 51.509865, longitude: -0.118092)    
);
// 890.72244126546
```
