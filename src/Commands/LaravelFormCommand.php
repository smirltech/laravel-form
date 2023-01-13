<?php

namespace SmirlTech\LaravelForm\Commands;

use Illuminate\Console\Command;

class LaravelFormCommand extends Command
{
    public $signature = 'laravel-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
