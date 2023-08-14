<?php

namespace Jetimob\Asaas;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\Asaas\Console\AsaasInstallPackage;

class AsaasServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $src = realpath($raw = __DIR__ . '/../config/asaas.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([$src => config_path('asaas.php')], 'config');
            $this->commands([
                AsaasInstallPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'asaas');
    }

    public function register(): void
    {
        $this->app->singleton('jetimob.asaas', function (Container $app) {
            return new Asaas($app['config']['asaas'] ?? []);
        });

        $this->app->alias('jetimob.asaas', Asaas::class);
    }

    public function provides(): array
    {
        return [
            'jetimob.asaas',
        ];
    }
}
