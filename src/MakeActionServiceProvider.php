<?php

declare(strict_types=1);

namespace CarloEusebi\PhpArtisanMakeAction;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

final class MakeActionServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ActionMakeCommand::class,
            ]);
        }
    }

    public function provides(): array
    {
        return [
            ActionMakeCommand::class,
        ];
    }
}
