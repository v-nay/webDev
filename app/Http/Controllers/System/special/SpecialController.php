<?php

namespace App\Http\Controllers\System\special;

use Illuminate\Http\Request;
use App\Services\System\SpecialService;
use App\Http\Controllers\System\ResourceController;

class SpecialController extends ResourceController
{
    public function __construct(SpecialService $specialService)
    {
        parent::__construct($specialService);
    }

    public function moduleName()
    {
        return 'specials';
    }

    public function viewFolder()
    {
        return 'system.special';
    }
}
