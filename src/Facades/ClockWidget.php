<?php

namespace Awcodes\ClockWidget\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Awcodes\ClockWidget\ClockWidget
 */
class ClockWidget extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Awcodes\ClockWidget\ClockWidget::class;
    }
}
