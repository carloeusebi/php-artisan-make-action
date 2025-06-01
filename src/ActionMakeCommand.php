<?php

declare(strict_types=1);

namespace CarloEusebi\PhpArtisanMakeAction;

use Illuminate\Console\GeneratorCommand;

final class ActionMakeCommand extends GeneratorCommand
{
    protected $name = 'make:action';

    protected $description = 'Create a new action class';

    protected $type = 'Action';

    protected function getStub(): string
    {
        return __DIR__.'/stubs/action.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Actions';
    }
}
