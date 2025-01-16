<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(CategoryService $categoryService)
    {
        parent::__construct($categoryService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\system\categoryRequest';
    }

    public function updateValidationRequest()
    {
        return 'App\Http\Requests\system\categoryRequest';
    }

    public function moduleName()
    {
        return 'categories';
    }

    public function viewFolder()
    {
        return 'system.category';
    }
}
