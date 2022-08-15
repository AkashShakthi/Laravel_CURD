<?php

namespace infrastructure\Facades;

use infrastructure\Facades\FileService;
use Illuminate\Support\Facades\Facade;

class FileFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FileService::class;
    }
}
