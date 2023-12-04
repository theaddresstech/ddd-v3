<?php

namespace Bigtechlab\Ddd\Commands;

use Illuminate\Console\Command;

class DddCommand extends Command
{
    public $signature = 'ddd';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
