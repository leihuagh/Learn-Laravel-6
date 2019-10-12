<?php

use Illuminate\Foundation\Inspiring;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('monty', function () {
    $this->info('Spam eggs sausage spam sausage eggs');
})->describe('Display an important message from monty python');
