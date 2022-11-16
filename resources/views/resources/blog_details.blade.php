@extends('layouts.frontend.app')

@section('title')
<title>Blogs Details</title>
@endsection
@section('css')

@endsection

@section('content')
<section class="blog_section456 paddy">
    <div class="container">

        <div class="bloglt45">
            <div class="blog_box565 blogdetls45">
                <figure>
                    <img src="{{asset('blogs')}}/{{$blogs->image}}" width="100%">
                </figure>
                <div class="bloginfo899">
                    <ul class="blgtop45">
                        <li class="active"><i class="fa fa-user"></i> by {{$blogs->authname}}</li>
                        <li>
                            <i class="fa fa-calendar"></i>Published at {{date('M d, Y',strtotime($blogs->created_at))}}
                        </li>
                        <li><i class="fa fa-tag" aria-hidden="true"></i> {{$blogs->tags}}</li>
                        <li><i class="fa fa-bookmark"></i> {{$blogs->categories}}</li>
                    </ul>

                    <h2>{{$blogs->title}}</h2>
                    <p>
                        {!! $blogs->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('js')
<!------------------------------------------- Delete section ----------------------------------->


@endsection