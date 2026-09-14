<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('dashboard')->group(function () {

    Route::get('/mahasiswa/{nrp}', function ($nrp) {
        return view('mahasiswa.detail', compact('nrp'));
    })->where('nrp', '[0-9]{10}')->name('mahasiswa.detail');

    Route::get('/agent/{tema?}', function ($tema = 'General Assistant Agent') {
        return view('agent.index', compact('tema'));
    })->name('agent.idea');

    Route::get('/hitung-ipk/{ip1}/{ip2}', function ($ip1, $ip2) {
        $ip1_val = (float) $ip1;
        $ip2_val = (float) $ip2;
        $ipk = number_format(($ip1_val + $ip2_val) / 2, 2);

        return view('kalkulator.ipk', [
            'ip1' => $ip1_val,
            'ip2' => $ip2_val,
            'ipk' => $ipk
        ]);
    })->name('kalkulator.ipk');

});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});