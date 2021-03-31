<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Eticket\Console;

use Epmnzava\BillMe\Models\Timezone;
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

    public function saveUtcData($timezones)
    {

        foreach($timezones as $timezone){
        $client=new Client();
        $response = json_decode($client->request('GET', 'https://timezoneapi.io/api/timezone/?'.$timezone.'&token='.config('eticket.timezone_token')));
     
        if($response->meta->code==200){

            $utc=new Timezone;
            $utc->timezone=$timezone;
            $utc->gmt=$response->data->datetime->offset_gmt;
            $utc->save();
        }



        }
    }

    public function fetchTimezones()
    {

        $client=new Client();
        $response = $client->request('GET', 'http://worldtimeapi.org/api/timezone');
        
        if($response->getStatusCode()==200)
        return json_decode($response->getBody());
    }
}
