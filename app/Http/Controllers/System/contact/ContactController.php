<?php

namespace App\Http\Controllers\System\contact;

use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\System\ResourceController;

class ContactController extends ResourceController
{
    public function __construct(ContactService $contactService)
    {
        parent::__construct($contactService);
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
        return 'contacts';
    }

    public function viewFolder()
    {
        return 'system.contact';
    }
}
