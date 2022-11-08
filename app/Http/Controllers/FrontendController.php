<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\FirstSliderModel;
use App\Models\Services;
use App\Models\CompanyLogos;
use App\Models\Testimonial;
use App\Models\News;
use Alert;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postBanner(Request $request)
    {
        $banner                             = new FirstSliderModel();
        $banner->title                      = $request->title;
        $banner->sub_title                  = $request->sub_title;
        $banner->details                    = $request->description;
        $banner->save();
        Alert::toast('Banner is added', 'success');
        return back();
    }

    public function postServices(Request $request)
    {
        $service = new Services();
        if (!empty($request->file('image'))) {
            $seviceImage                   = $request->file('image');
            $Imagename                     = time() . '-serviceImage' . '.' . $seviceImage->getClientOriginalExtension();
            $result                        = public_path('services');
            $seviceImage->move($result, $Imagename);
            $service->image                = $Imagename;
        }
        $service->title                    = $request->title;
        $service->sub_title                = $request->sub_title;
        $service->description              = $request->description;
        $service->save();
        Alert::toast('Service is added', 'success');
        return back();
    }

    public function mediaOutlet(Request $request)
    {

        $CompanyLogos = new CompanyLogos();
        if (!empty($request->file('image'))) {
            $seviceImage                    = $request->file('image');
            $Imagename                      = time() . '-CompanyLogo' . '.' . $seviceImage->getClientOriginalExtension();
            $result                         = public_path('companylogos');
            $seviceImage->move($result, $Imagename);
            $CompanyLogos->image            = $Imagename;
        }
        $CompanyLogos->save();
        Alert::toast('Logo is added', 'success');
        return back();
    }

    public function testimonial(Request $request)
    {
        $testimonial = new Testimonial();
        if (!empty($request->file('image'))) {
            $autherimage                    = $request->file('image');
            $Imagename                      = time() . '-Testimonial' . '.' . $autherimage->getClientOriginalExtension();
            $result                         = public_path('testimonials');
            $autherimage->move($result, $Imagename);
            $testimonial->image             = $Imagename;
        }
        $testimonial->name                  = $request->name;
        $testimonial->designation           = $request->designation;
        $testimonial->messages              = $request->messages;
        $testimonial->save();
        Alert::toast('Testimonial is added', 'success');
        return back();
    }

    public function news(Request $request)
    {
        $news = new News();
        if (!empty($request->file('image'))) {
            $newsImage                      = $request->file('image');
            $Imagename                      = time() . '-News' . '.' . $newsImage->getClientOriginalExtension();
            $result                         = public_path('news');
            $newsImage->move($result, $Imagename);
            $news->image                    = $Imagename;
        }
        $news->topic                        = $request->topic;
        $news->title                        = $request->title;
        $news->description                  = $request->description;
        $news->save();
        Alert::toast('News is added', 'success');
        return back();
    }
}