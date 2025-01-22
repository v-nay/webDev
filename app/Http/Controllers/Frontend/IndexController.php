<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Heading;
use App\Model\Special;
use App\Model\Offering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function getAll()
    {
        // $headings = Heading::orderBy('id', 'ASC')->get();
        
        $featureds = Offering::orderBy('id', 'ASC')->take(3)->get();
        
        return view('frontend.index',compact('featureds'));
    }
    public function menuPage()
    {
        $offerings = Offering::orderBy('id', 'ASC')->take(3)->get();
        return view('frontend.pages.menu',compact('offerings'));
    }
    public function reservationPage()
    {
        return view('frontend.pages.reservation');
    }
    public function specialPage()
    {
        
        $specials = Special::orderBy('id', 'ASC')->take(3)->get();
        return view('frontend.pages.special',compact('specials'));
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
