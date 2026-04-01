<?php

/**
 * Configuración de Google Maps
 * Valores sensibles se cargan desde .env
 */

return [
    'google' => [
        'api_key' => env('GOOGLE_MAPS_API_KEY', ''),
        'latitude' => (float) env('GOOGLE_MAPS_LAT', 19.4326),
        'longitude' => (float) env('GOOGLE_MAPS_LNG', -99.1332),
        'address' => env('GOOGLE_MAPS_ADDRESS', 'Familias en La Roca'),
        'zoom' => 16,
        'map_type' => 'roadmap',
    ],
];