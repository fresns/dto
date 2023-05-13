<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO;

use Fresns\DTO\Traits\PayloadTrait;
use Fresns\DTO\Traits\ValidatorTrait;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;

abstract class DTO implements Arrayable
{
    use ValidatorTrait;
    use PayloadTrait;

    /**
     * @var array
     */
    protected $origin = [];

    /**
     * DTO constructor.
     *
     * @param  bool  $verify
     *
     * @throws \Throwable
     */
    public function __construct(array $data = [], $verify = true)
    {
        $this->setOriginData($data);
        $this->bootstrap($verify);
    }

    public static function make(array $data = [], $verify = true)
    {
        return new static($data, $verify);
    }

    /**
     * @param $verify
     *
     * @throws \Throwable
     */
    public function bootstrap($verify)
    {
        $this->validate($verify);
        $this->setPayload();
    }

    abstract public function rules(): array;

    public function toArray(): array
    {
        return $this->payload;
    }

    public function getOrigin(): array
    {
        return $this->origin;
    }

    public function isEmpty(): bool
    {
        if (empty($this->origin)) {
            return true;
        }

        return empty(array_filter($this->origin));
    }

    public function setOriginData(array $data = []): void
    {
        if (! $data && function_exists('request')) {
            $data = request()->all();
        }

        $this->origin = $data;
    }

    /**
     * Get parameters.
     *
     * @param $key
     * @param  null  $default
     * @return array|\ArrayAccess|mixed
     */
    public function getItem($key, $default = null)
    {
        return Arr::get($this->payload ?: $this->origin, $key, $default);
    }

    /**
     * @param $name
     * @return array|\ArrayAccess|null
     *
     * @throws \Throwable
     */
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    /**
     * Implement isset to prevent empty from failing to detect a value.
     *
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->payload[$name]);
    }
}
