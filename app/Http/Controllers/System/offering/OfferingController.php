<?php

namespace App\Http\Controllers\System\offering;


use Illuminate\Http\Request;
use App\Services\System\OfferingService;
use App\Http\Controllers\System\ResourceController;

class OfferingController extends ResourceController
{
    public function __construct(OfferingService $offeringService)
    {
        parent::__construct($offeringService);
    }

    public function moduleName()
    {
        return 'offerings';
    }

    public function viewFolder()
    {
        return 'system.offering';
    }
}
