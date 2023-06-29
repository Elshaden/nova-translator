<?php

namespace Elshaden\NovaTranslator\Commands;

use Illuminate\Console\Command;

class NovaTranslatorCommand extends Command
{
    public $signature = 'nova-translator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
