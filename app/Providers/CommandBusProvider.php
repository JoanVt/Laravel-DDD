<?php

namespace App\Providers;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Joselfonseca\LaravelTactician\Locator\LaravelLocator;
use League\Tactician\CommandBus;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Plugins\LockingMiddleware;
use Src\Application\Contracts\Bus\CommandBusInterface;

class CommandBusProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $config = config('laravel-tactician');

        $this->app->singleton(
            CommandBusInterface::class,
            function (Container $container) use ($config) {
                /** @var LaravelLocator $locator */
                $locator = $container->make($config['locator']);

                $locator->addHandlers($config['map']);

                return new \Src\Infraestructure\Bus\CommandBus(
                    [
                        new LockingMiddleware(),
                        new CommandHandlerMiddleware(
                            $container->make($config['extractor']), $locator, $container->make($config['inflector'])
                        ),
                    ]
                );
            }
        );
    }
}