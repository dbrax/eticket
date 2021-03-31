<?php

namespace Epmnzava\Eticket\Actions;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class GetTimezone
{

    public function getTimezones() : Response
    {
        $client=new Client();
        $response = $client->request('GET', 'http://worldtimeapi.org/api/timezone');
        
        return $response;
    }

}
