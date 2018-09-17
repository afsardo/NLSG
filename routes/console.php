<?php

Artisan::command('credentials:create', function () {
    \App\User::forceCreate([
        'username' => config('auth.credentials.username'),
        'password' => bcrypt(config('auth.credentials.password')),
    ]);

    $this->info('User credentials created!');
});
