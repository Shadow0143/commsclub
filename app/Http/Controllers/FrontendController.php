<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\FirstSliderModel;
use App\Models\Services;
use App\Models\CompanyLogos;
use App\Models\Testimonial;
use App\Models\News;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postBanner(Request $request)
    {
        if (!empty($request->id)) {
            $banner                             =  FirstSliderModel::find($request->id);
            $banner->title                      = $request->title;
            $banner->sub_title                  = $request->sub_title;
            $banner->details                    = $request->description;
            $banner->save();
            Alert::toast('Banner is updated', 'success');
        } else {
            $banner                             = new FirstSliderModel();
            $banner->title                      = $request->title;
            $banner->sub_title                  = $request->sub_title;
            $banner->details                    = $request->description;
            $banner->save();
            Alert::toast('Banner is added', 'success');
        }

        return back();
    }

    public function postServices(Request $request)
    {
        if (!empty($request->id)) {
            $service = Services::find($request->id);
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
            Alert::toast('Service is updated', 'success');
        } else {
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
        }
        return back();
    }

    public function mediaOutlet(Request $request)
    {

        $CompanyLogos = new CompanyLogos();
        if (!empty($request->file('image'))) {
            $seviceImage                        = $request->file('image');
            $Imagename                          = time() . '-CompanyLogo' . '.' . $seviceImage->getClientOriginalExtension();
            $result                             = public_path('companylogos');
            $seviceImage->move($result, $Imagename);
            $CompanyLogos->image                = $Imagename;
        }
        $CompanyLogos->save();
        Alert::toast('Logo is added', 'success');
        return back();
    }

    public function testimonial(Request $request)
    {
        if (!empty($request->id)) {
            $testimonial = Testimonial::find($request->id);
            if (!empty($request->file('image'))) {
                $autherimage                        = $request->file('image');
                $Imagename                          = time() . '-Testimonial' . '.' . $autherimage->getClientOriginalExtension();
                $result                             = public_path('testimonials');
                $autherimage->move($result, $Imagename);
                $testimonial->image                 = $Imagename;
            }
            $testimonial->name                      = $request->name;
            $testimonial->designation               = $request->designation;
            $testimonial->messages                  = $request->messages;
            $testimonial->save();
            Alert::toast('Testimonial is updated', 'success');
        } else {
            $testimonial = new Testimonial();
            if (!empty($request->file('image'))) {
                $autherimage                        = $request->file('image');
                $Imagename                          = time() . '-Testimonial' . '.' . $autherimage->getClientOriginalExtension();
                $result                             = public_path('testimonials');
                $autherimage->move($result, $Imagename);
                $testimonial->image                 = $Imagename;
            }
            $testimonial->name                      = $request->name;
            $testimonial->designation               = $request->designation;
            $testimonial->messages                  = $request->messages;
            $testimonial->save();
            Alert::toast('Testimonial is added', 'success');
        }
        return back();
    }

    public function news(Request $request)
    {
        if (!empty($request->id)) {
            $news = News::find($request->id);
            if (!empty($request->file('image'))) {
                $newsImage                          = $request->file('image');
                $Imagename                          = time() . '-News' . '.' . $newsImage->getClientOriginalExtension();
                $result                             = public_path('news');
                $newsImage->move($result, $Imagename);
                $news->image                        = $Imagename;
            }
            $news->topic                            = $request->topic;
            $news->title                            = $request->title;
            $news->description                      = $request->description;
            $news->save();
            Alert::toast('News is updated', 'success');
        } else {

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
        }
        return back();
    }

    public function editBanner(Request $request)
    {
        $banner = FirstSliderModel::find($request->id);
        return $banner;
    }

    public function editService(Request $request)
    {
        $sevice = Services::find($request->id);
        return $sevice;
    }

    public function editTestimonial(Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        return $testimonial;
    }

    public function editNews(Request $request)
    {
        $news = News::find($request->id);
        return $news;
    }

    public function deleteBanner(Request $request)
    {
        $banner = FirstSliderModel::find($request->id);
        $banner->delete();
        return 1;
    }

    public function deleteService(Request $request)
    {
        $service = Services::find($request->id);
        $service->delete();
        return $service;
    }
    public function deleteCompanyLogo(Request $request)
    {
        $CompanyLogos = CompanyLogos::find($request->id);
        $CompanyLogos->delete();
        return 1;
    }
    public function deleteTestimonial(Request $request)
    {
        $Testimonial = Testimonial::find($request->id);
        $Testimonial->delete();
        return 1;
    }
    public function deleteNews(Request $request)
    {
        $News = News::find($request->id);
        $News->delete();
        return 1;
    }
}