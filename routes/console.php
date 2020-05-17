<?php

use App\Models\Message;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('laracarte:clean-database', function () {
    $this->info('Cleaning database ...');
    Message::twoMonthsOld()->delete();
    $this->info('Database cleaned');
})->describe('Clean Database');
