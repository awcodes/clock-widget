<?php

namespace Awcodes\ClockWidget\Commands;

use Illuminate\Console\Command;

class ClockWidgetCommand extends Command
{
    public $signature = 'clock-widget';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
