<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Blogs;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createBlogs()
    {
        return view('resources.createBlogs');
    }

    public function postBlogs(Request $request)
    {

        if (!empty($request->id)) {
            $blogs = Blogs::find($request->id);
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->authname = $request->authname;
            $blogs->categories = $request->categories;
            $blogs->tags = $request->tags;
            if (!empty($request->file('image'))) {
                $eventImage                     = $request->file('image');
                $Imagename                      = time() . '-blogImage' . '.' . $eventImage->getClientOriginalExtension();
                $result                         = public_path('blogs');
                $eventImage->move($result, $Imagename);
                $blogs->image                   = $Imagename;
            }

            $blogs->save();
            toast('Blog is updated ', 'success');
        } else {
            $blogs = new Blogs();
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->authname = $request->authname;
            $blogs->categories = $request->categories;
            $blogs->tags = $request->tags;
            if (!empty($request->file('image'))) {
                $eventImage                     = $request->file('image');
                $Imagename                      = time() . '-blogImage' . '.' . $eventImage->getClientOriginalExtension();
                $result                         = public_path('blogs');
                $eventImage->move($result, $Imagename);
                $blogs->image                   = $Imagename;
            }

            $blogs->save();
            toast('Blog is added ', 'success');
        }

        return redirect()->route('blogs');
    }

    public function editBlogs($id)
    {
        $blogs                                  = Blogs::find($id);
        return view('resources.createBlogs')->with('blog', $blogs);
    }
    public function deleteBlogs(Request $request)
    {
        $blogs                                  = Blogs::find($request->id);
        $blogs->delete();
        return 1;
    }
}
