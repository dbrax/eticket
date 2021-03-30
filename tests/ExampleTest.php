<?php

namespace Epmnzava\Eticket\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\Eticket\EticketServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [EticketServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
