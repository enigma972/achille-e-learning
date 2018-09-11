<?php

namespace app\tests\controllers;

use Silex\WebTestCase;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class AppControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $this->assertEquals(200, 200);
    }

    /**
     * Creates the application.
     *
     * @return HttpKernelInterface
     */
    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}
