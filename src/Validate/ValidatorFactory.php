<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Validate;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

/**
 * @mixin Factory
 */
class ValidatorFactory
{
    protected $langPath;

    /**
     * @var Factory
     */
    private $factory;

    public function __construct(?string $langPath = null)
    {
        $this->setLangPath($langPath);
    }

    public function getFactory()
    {
        if (is_null($this->factory)) {
            $this->factory = new Factory($this->loadTranslator());
        }

        return $this->factory;
    }

    public function setLangPath(?string $langPath = null)
    {
        $this->langPath = $langPath;
    }

    public function getLangPath()
    {
        // webman
        if (is_null($this->langPath) && ! class_exists(\Illuminate\Foundation\Application::class)) {
            $this->langPath = base_path().'/resource/translations';
        }
        // laravel
        elseif (is_null($this->langPath) && class_exists(\Illuminate\Foundation\Application::class)) {
            $this->langPath = base_path().'/resources/lang';
        }

        return $this->langPath;
    }

    protected function loadTranslator(): Translator
    {
        $langPath = $this->getLangPath();

        $filesystem = new Filesystem();
        $loader = new Translation\FileLoader($filesystem, $langPath);
        $loader->addNamespace('lang', $langPath);
        $loader->load('en', 'validation', 'lang');

        return new Translator($loader, 'en');
    }

    public function __call(string $method, array $args)
    {
        return call_user_func_array([$this->getFactory(), $method], $args);
    }
}
