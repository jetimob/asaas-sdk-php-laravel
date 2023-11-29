<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class AsaasRequestException extends RequestException implements AsaasException, HydratableContract
{
    use Serializable;

    /** @return RequestError[] */
    public function getErrors(): array
    {
        $errors = $this->getHydrationData()['errors'] ?? [];

        return array_reduce($errors, function (array $all, array $error) {
            try {
                $requestError = RequestError::deserialize($error);
                return [...$all, $requestError];
            } catch (\Exception) {
                return $all;
            }
        }, []);
    }
}
