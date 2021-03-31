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


        
        if (! $this->configExists('blogpackage.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration');
        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten');
            }
        }
        
        $this->info('End setting ticket status');
    }
    
   
}