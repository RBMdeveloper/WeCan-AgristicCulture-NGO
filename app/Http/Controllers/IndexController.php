<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\Member;
class IndexController extends Controller
{
    public function index()
    {
        // Active ordered banners
        $banners = Banner::where('status', 1)
                    ->orderBy('position', 'asc')
                    ->get();

        // Gallery
        $galleries = Gallery::latest()->get();

        return view('web.index', compact(
            'banners',
            'galleries'
        ));
    }

    public function about(){
        return view('web.about');
    }


public function gallery()
{
    $galleries = Gallery::latest()->get();

    return view('web.gallery', compact('galleries'));
}




    public function contact(){
        return view('web.contact');
    }


    public function service(){
        return view('web.services');
    }

    public function cancellation_refund(){
        return view('web.cancellation-refund');
    }

    public function disclaimer(){
        return view('web.disclaimer');
    }

    public function donate(){
        return view('web.donate');
    }

    public function privacy_policy(){
        return view('web.privacy-policy');
    }

        public function shipping(){
        return view('web.shipping');
    }

        public function terms_condition(){
        return view('web.terms-condition');
    }






    public function members()
    {
        $members = Member::where('status', 1)
                    ->orderBy('position', 'asc')
                    ->get();

        return view('web.members', compact('members'));
    }



}
