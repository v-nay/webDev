<?php

namespace App\Http\Controllers\System\heading;

use App\Http\Controllers\System\ResourceController;
use Illuminate\Http\Request;
use App\Services\System\HeadingService;

class HeadingController extends ResourceController
{
    public function __construct(HeadingService $headingService)
    {
        parent::__construct($headingService);
    }

    // public function storeValidationRequest()
    // {
    //     return 'App\Http\Requests\system\categoryRequest';
    // }

    // public function updateValidationRequest()
    // {
    //     return 'App\Http\Requests\system\categoryRequest';
    // }

    public function moduleName()
    {
        return 'headings';
    }

    public function viewFolder()
    {
        return 'system.headings';
    }
}
