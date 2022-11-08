<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\FirstSliderModel;
use App\Models\Services;
use App\Models\CompanyLogos;
use App\Models\Testimonial;
use App\Models\News;


class WelcomeController extends Controller
{
    public function index()
    {
        $banner = FirstSliderModel::orderBy('id', 'desc')->where('status', 'active')->get();
        $services = Services::orderBy('id', 'desc')->where('status', 'active')->get();
        $companyLogos = CompanyLogos::orderBy('id', 'desc')->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->where('status', 'active')->get();
        $news = News::orderBy('id', 'desc')->where('status', 'active')->get();

        return view('welcome')->with('banner', $banner)->with('services', $services)->with('companyLogos', $companyLogos)->with('testimonials', $testimonials)->with('news', $news);
    }

    public function events()
    {
        return view('events.events');
    }
}