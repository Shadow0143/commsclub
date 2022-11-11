<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\FirstSliderModel;
use App\Models\Services;
use App\Models\CompanyLogos;
use App\Models\Testimonial;
use App\Models\News;
use App\Models\Events;
use App\Models\Blogs;

use RealRashid\SweetAlert\Facades\Alert;


class WelcomeController extends Controller
{
    public function index()
    {
        $banner                                 = FirstSliderModel::orderBy('id', 'desc')->where('status', 'active')->get();
        $services                               = Services::orderBy('id', 'desc')->where('status', 'active')->get();
        $companyLogos                           = CompanyLogos::orderBy('id', 'desc')->get();
        $testimonials                           = Testimonial::orderBy('id', 'desc')->where('status', 'active')->get();
        $news                                   = News::orderBy('id', 'desc')->where('status', 'active')->get();

        return view('welcome')->with('banner', $banner)->with('services', $services)->with('companyLogos', $companyLogos)->with('testimonials', $testimonials)->with('news', $news);
    }

    public function events()
    {
        $event                                  = Events::orderBy('id', 'desc')->get();
        return view('events.events')->with('event', $event);
    }

    public function blogs()
    {
        $blogs = Blogs::orderBy('id', 'desc')->get();
        return view('resources.blogs')->with('blogs', $blogs);
    }

    public function searchBlogs(Request $request)
    {
        $blogs                                  = [];
        if ($request->searchtype == 'textsearch') {
            $blogs                              = Blogs::where('title', 'like', '%' . $request->keyword . '%')->get();
        }
        if ($request->searchtype == 'cat') {
            $blogs                              = Blogs::where('categories', 'like', '%' . $request->value . '%')->get();
        }
        if ($request->searchtype == 'tag') {
            $blogs                              = Blogs::where('tags', 'like', '%' . $request->value . '%')->get();
        }
        if ($request->searchtype == 'date') {
            $blogs                              = Blogs::where('created_at', 'like', '%' . $request->value . '%')->get();
        }

        return view('resources.ajax_blogs')->with('blogs', $blogs);
    }
}