<?php

namespace Astrogoat\Calcom\Commands;

use Illuminate\Console\Command;

class CalcomCommand extends Command
{
    public $signature = 'calcom';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
