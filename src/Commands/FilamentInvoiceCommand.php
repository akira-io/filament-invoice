<?php

namespace Akira\FilamentInvoice\Commands;

use Illuminate\Console\Command;

class FilamentInvoiceCommand extends Command
{
    public $signature = 'filament-invoice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
