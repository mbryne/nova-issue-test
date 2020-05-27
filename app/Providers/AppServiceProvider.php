<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //  added for sake of demo / php artisan serve
        $_ENV['AWS_BUCKET'] = config('filesystems.disks.s3.bucket');
        $_ENV['AWS_DEFAULT_REGION'] = config('filesystems.disks.s3.region');
        $_ENV['AWS_ACCESS_KEY_ID'] = config('filesystems.disks.s3.key');
        $_ENV['AWS_SECRET_ACCESS_KEY'] = config('filesystems.disks.s3.secret');

    }
}
