<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Eticket\Tests;

use Auth;
use CreateTimezonesTable;
use Epmnzava\Eticket\Actions\GetTimezone;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;

use Orchestra\Testbench\TestCase;

class FeedInTimezoneCommandTest extends TestCase
{
  /** @var string */


  public function setUp(): void
  {

    parent::setUp();
    require_once __DIR__ . '/../database/migrations/create_timezones_table.php';
    //require_once __DIR__ . '/../database/migrations/create_expense_table.php';

    (new CreateTimezonesTable())->up();
    //(new CreateExpenseTable())->up();
  }

  /** @test */
  public function the_install_timezone()
  {

 $this->assertTrue(true);
  }
}
