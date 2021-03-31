<?php

namespace Epmnzava\Eticket\Console;

use Epmnzava\Eticket\Actions\GetTimezone;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class FeedInTimezone extends Command
{
    protected $signature = 'eticket:feedtimezone';

    protected $description = 'feed in timezone ';

    public function handle()
    {
        $this->info('Begining to feed in timezone');

        $timezones = $this->fetchTimezones();

        $this->saveUtcData($timezones);



        $this->info('End setting ticket timezone feedin');
    }

    public function saveUtcData()
    {
    }

    public function fetchTimezones()
    {


        $timezones = new GetTimezone;
        $reponse = $timezones->getTimezones();
        return json_decode($reponse->getBody());
    }
}
