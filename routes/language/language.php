<?php

// Localization
Route::get('/js/lang', function () {

    $strings = Cache::rememberForever('lang.js', function () {

        $lang = config('app.locale');
        $files = glob(resource_path('lang/' . $lang . '/*.php'));
        $strings = [];
        foreach ($files as $file) {
            $name = basename($file, '.php');
            if ($name !== "custom" && $name !== "default") {
                $new_keys = require $file;
                $strings = array_merge($strings, $new_keys);
            }
        }
        return $strings;
    });

    $contents = 'window.i18n = ' . json_encode(array("lang" => $strings)) . ';';
    $response = \Response::make($contents, 200);
    $response->header('Content-Type', 'application/javascript');
    return $response;

})->name('assets.lang');