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

    /**
     * This function returns the path to the DTO stub file
     * 
     * @return The stub file.
     */
    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/dto.stub'))) {
            return base_path('stubs/dto.stub');
        }

        return dirname(dirname(__DIR__)).'/stubs/dto.stub';
    }

    /**
     * If the --path option is used, the default namespace is the root namespace. Otherwise, the
     * default namespace is the root namespace + DTO
     * 
     * @param rootNamespace The namespace of the project.
     * 
     * @return The namespace for the DTO.
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        if ($this->option('path')) {
            return $rootNamespace;
        }

        return $rootNamespace.'\DTO';
    }

    /**
     * If the path option is set, then the path is used to generate the path of the file. Otherwise,
     * the parent class' getPath function is used
     * 
     * @param name The name of the class being generated.
     * 
     * @return The path to the file that will be created.
     */
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
