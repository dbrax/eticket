<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Eticket\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class EticketInstall extends Command
{
    protected $signature = 'eticket:install';

    protected $description = 'Command to install package';

    public function handle()
    {
        $this->info('Begining to install ticket package  🤙 🤙 🤙');

        if (!$this->configExists('eticket.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration  🤙 🤙 🤙');

            //check if migrations are not available then migrate
            //publish migrations ..

            //then 


        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten  🤙 🤙 🤙');
            }
        }



        $this->info('End of installing package ');
    }

    private function publishMigrations()
    { 
        
        $params = [
        '--provider' => "Epmnzava\Eticket\EticketServiceProvider",
        '--tag' => "migration"
    ];

    $this->call('vendor:publish', $params);


    }

    private function feedTicketStatus()
    {
    }


    private function feedCurrencies(){
        
    }

    private function installTicketStatuses()
    {
    }
    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm(
            'Config file already exists. Do you want to overwrite it?',
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "Epmnzava\Eticket\EticketServiceProvider",
            '--tag' => "config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = '';
        }



        $this->call('vendor:publish', $params);
    }
}
