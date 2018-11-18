<?php

declare(strict_types=1);

namespace App\Action;

use Symfony\Component\HttpFoundation\JsonResponse;

class ExampleAction
{
    public function __invoke() : JsonResponse
    {
        return new JsonResponse(['Hello world!']);
    }
}
