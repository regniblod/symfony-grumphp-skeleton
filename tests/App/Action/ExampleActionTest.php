<?php

declare(strict_types=1);

use App\Action\ExampleAction;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExampleActionTest extends TestCase
{
    /**
     * @test
     */
    public function actionReturnsJsonResponse() : void
    {
        $action = new ExampleAction();
        $response = $action->__invoke();

        self::assertInstanceOf(JsonResponse::class, $response);
        self::assertEquals(\json_encode(['Hello world!']), $response->getContent());
    }
}
