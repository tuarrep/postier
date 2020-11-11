<?php

namespace Postier\Postier\Commands;

use Illuminate\Console\Command;

class PostierCommand extends Command
{
    public $signature = 'postier';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
