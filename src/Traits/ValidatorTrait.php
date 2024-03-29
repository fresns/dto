<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Traits;

use Illuminate\Contracts\Container\Container;

trait ValidatorTrait
{
    use ResponseTrait;

    /**
     * Whether to turn on verify.
     *
     * @var bool
     */
    protected $verify = true;

    /**
     * @param  $verify
     */
    public function validate($verify): void
    {
        if (! $verify || empty($this->rules())) {
            return;
        }

        foreach (['beforeValidate', 'baseValidate', 'afterValidate'] as $validateMethod) {
            if (! method_exists($this, $validateMethod)) {
                continue;
            }

            call_user_func([$this, $validateMethod], $this->origin);
        }
    }

    /**
     * @param  $origin
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \Throwable
     */
    public function baseValidate($origin): void
    {
        $validator = $this->getValidator()->make($origin, $this->rules());

        if ($validator->fails()) {
            $this->failure($validator->errors()->first());
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Validation\Factory|mixed|Factory
     */
    protected function getValidator()
    {
        if (function_exists('app') && app() instanceof Container) {
            return app(\Illuminate\Contracts\Validation\Factory::class);
        }

        return \validator();
    }
}
