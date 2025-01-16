<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Heading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadingController extends Controller
{
    public function __construct()
    {
    }

    public function getAll()
    {
        $headings = Heading::all();
        return view('frontend.pages.categories', compact('headings'));
    }
}
