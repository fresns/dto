<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ResponseTrait
{
    public function success(mixed $data = null, ?string $message = null, int $code = 0, array $headers = [])
    {
        if (is_string($data)) {
            $code = $message;
            $message = $data;
            $data = null;
        }

        // pagination data
        $meta = [];
        $pagination = [];
        if (isset($data['data']) && isset($data['pagination'])) {
            extract($data);
        }

        $message = $message ?: 'Unknown Error';

        $fresnsResponse = compact('code', 'message', 'data') + array_filter(compact('pagination'));

        return \response(
            \json_encode($fresnsResponse, \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE | \JSON_PRETTY_PRINT),
            Response::HTTP_OK,
            array_merge([
                'Fresns-Version' => '3.x',
                'Fresns-Api' => 'v1',
                'Fresns-Author' => 'Jevan Tang',
                'Content-Type' => 'application/json',
            ], $headers)
        );
    }

    public function failure(int $code = 20000, ?string $message = null, mixed $data = null, array $headers = [])
    {
        if (! \request()->wantsJson()) {
            $message = \json_encode(compact('code', 'message', 'data'), \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE | \JSON_PRETTY_PRINT);
            if (! array_key_exists($code, Response::$statusTexts)) {
                $code = 200;
            }

            return \response(
                $message,
                $code,
                array_merge([
                    'Fresns-Version' => '3.x',
                    'Fresns-Api' => 'v1',
                    'Fresns-Author' => 'Jevan Tang',
                    'Content-Type' => 'application/json',
                ], $headers)
            );
        }

        return $this->success($data, $message ?: 'Unknown Error', $code ?: 3e4, $headers);
    }
}
