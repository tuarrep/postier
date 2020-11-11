<?php

namespace Postier\Postier;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Postier\Postier\Postier
 */
class PostierFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postier';
    }
}
