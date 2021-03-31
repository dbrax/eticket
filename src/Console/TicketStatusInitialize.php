<?php

namespace Epmnzava\Eticket\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TicketStatusInitialize extends Command
{
    protected $signature = 'eticket:setstatus';

    protected $description = 'Set initial ticket statuses';

    public function handle()
    {
        $this->info('Begining to set ticket statuses');


        
  
        
        $this->info('End setting ticket status');
    }
    
   
}