<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Buat direktori output
$outputDir = public_path('docs');
if (!file_exists($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Render view utama
file_put_contents($outputDir.'/index.html', 
    view('index')->render()
);

// Copy assets
$assets = [
    'css' => resource_path('sass/app.scss'),
    'js' => resource_path('js/app.js'),
    'images' => public_path('images')
];

foreach ($assets as $type => $path) {
    // Implementasi copy file/directory sesuai kebutuhan
}