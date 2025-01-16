<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Heading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function getAll()
    {
        $headings = Heading::all();
        return view('frontend.index', compact('headings'));
    }
    public function menuPage()
    {
        return view('frontend.pages.menu');
    }
    public function reservationPage()
    {
        return view('frontend.pages.reservation');
    }
    public function specialPage()
    {
        return view('frontend.pages.special');
    }
    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
    public function aboutPage()
    {
        return view('frontend.pages.about');
    }
}
