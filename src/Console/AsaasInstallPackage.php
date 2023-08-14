<?php

namespace Jetimob\Asaas\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\Asaas\AsaasServiceProvider;

class AsaasInstallPackage extends Command
{
    protected $signature = 'asaas:install';

    protected $description = 'Publishes Asaas\'s configuration';

    public function handle(): void
    {
        if (File::exists(config_path('asaas.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/asaas.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => AsaasServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}
