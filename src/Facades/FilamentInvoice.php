<?php

namespace Akira\FilamentInvoice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akira\FilamentInvoice\FilamentInvoice
 */
class FilamentInvoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akira\FilamentInvoice\FilamentInvoice::class;
    }
}
