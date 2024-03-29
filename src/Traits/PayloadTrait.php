<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Traits;

use Illuminate\Support\Str;

trait PayloadTrait
{
    use ResponseTrait;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @var array
     */
    protected $attributes = [];

    protected function fillable(): array
    {
        if (! $this->attributes) {
            $rules = method_exists($this, 'rules') ?
                array_keys($this->rules()) :
                [];

            $this->attributes = array_unique(array_merge($this->fillable, $rules));
        }

        return $this->attributes;
    }

    protected function setPayload(array $payload = []): void
    {
        $payload = $payload ?: $this->origin;

        // If it contains *, assign the value directly
        if (in_array('*', $this->fillable())) {
            $this->payload = $payload;

            return;
        }

        foreach ($payload as $key => $val) {
            // If the key value does not exist, then skip
            if (! in_array($key, $this->fillable())) {
                continue;
            }

            $this->setAttribute($key, $val);
        }
    }

    /**
     * @param  $name
     */
    protected function getAttribute($name): mixed
    {
        $method = 'get'.ucfirst(Str::camel($name)).'Attribute';

        if (method_exists($this, $method)) {
            return call_user_func([$this, $method]);
        }

        if (! array_key_exists($name, $this->payload) && ! in_array($name, $this->fillable())) {
            $this->failure(sprintf('%s attribute is not defined', $name));
        }

        return $this->payload[$name] ?? null;
    }

    /**
     * @param  $name
     * @param  $val
     */
    protected function setAttribute($name, $val): void
    {
        $method = 'set'.ucfirst(Str::camel($name)).'Attribute';

        if (method_exists($this, $method)) {
            $this->payload[$name] = call_user_func_array([$this, $method], [$val]);

            return;
        }

        $this->payload[$name] = $val;
    }
}
