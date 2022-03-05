<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class DTOMakeCommand extends GeneratorCommand
{
    protected $signature = 'make:dto {name : The name of the DTO}
        {--path= : The location where the migration file should be created}';

    protected $description = 'Create a new DTO file';

    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/dto.stub'))) {
            return base_path('stubs/dto.stub');
        }

        return dirname(dirname(__DIR__)).'/stubs/dto.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        if ($this->option('path')) {
            return $rootNamespace;
        }

        return $rootNamespace.'\DTO';
    }

    protected function getPath($name)
    {
        if ($path = $this->option('path')) {
            $name = Str::replaceFirst($this->rootNamespace(), '', $name);
            $filename = str_replace('\\', '/', $name);

            $path = trim($path, '/');

            return sprintf('%s/%s/%s.php',
                $this->laravel['path.base'],
                $path,
                $filename
            );
        }

        return parent::getPath($name);
    }
}
