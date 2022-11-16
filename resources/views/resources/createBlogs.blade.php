@extends('layouts.frontend.app')

@section('title')
<title>Create Blogs</title>
@endsection
@section('css')
<style>
    #min {
        padding-left: 10px !important;
    }

    #add {
        padding-left: 10px !important;
    }

    .inputfield55 select {
        background-color: #ececec;
        color: black
    }
</style>
@endsection

@section('content')
<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>Post Blogs</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('blogs')}}">Blogs</a>
            </li>
            <li>
                <span>Post Blogs</span>
            </li>
        </ul>
    </div>
</section>

<section class="eve_reg_sect456 paddy">
    <div class="container">
        <h2>Blog Posts</h2>
        <p>Please post your blogs by filling the form below, specify the tags ans categories for the blogs.</p>
        <form action="{{route('postBlogs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="blog_id" @if(!empty($blog)) value="{{$blog->id}}" @endif>

            <div class="eventformhld">
                <div class="evreg66">
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" required @if(!empty($blog)) value="{{$blog->title}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="inputfield55">
                                <label> Blog Image <span class="text-danger">*</span> </label>
                                <div class="inputfield55">
                                    <input type="file" id="image" name="image" @if(empty($blog)) required @endif>
                                </div>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Auther Name <span class="text-danger">*</span></label>
                                <input type="text" name="authname" required @if(!empty($blog))
                                    value="{{$blog->authname}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Categories <span class="text-danger">*</span></label>
                                <select name="categories" id="categories" class="form-control" required>
                                    <option value="">Please Select</option>
                                    <option value="press_conference" @if(!empty($blog)) {{ $blog->categories ==
                                        'press_conference' ? 'selected' : '' }} @endif>Press Conference</option>
                                    <option value="media_market" @if(!empty($blog)) {{ $blog->categories ==
                                        'media_market' ? 'selected' : '' }} @endif>Media & Market</option>
                                    <option value="other" @if(!empty($blog)) {{ $blog->categories == 'other' ?
                                        'selected' : '' }} @endif>Other</option>
                                </select>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Tags <span class="text-danger">*</span></label>
                                <select name="tags" id="tags" class="form-control" required>
                                    <option value="">Please Select</option>
                                    <option value="press_conference" @if(!empty($blog)) {{ $blog->tags ==
                                        'press_conference' ? 'selected' : '' }} @endif>Press Conference</option>
                                    <option value="media_market" @if(!empty($blog)) {{ $blog->tags == 'media_market' ?
                                        'selected' : '' }} @endif>Media & Market</option>
                                    <option value="other" @if(!empty($blog)) {{ $blog->tags == 'other' ? 'selected' : ''
                                        }} @endif>Other</option>
                                </select>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="evreg66">
                    <h3>Blogs Details</h3>
                    <div class="fieldrow row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="inputfield55">
                                <label>Blog Description</label>
                                <textarea name="description" id="description">   @if(!empty($blog)) {!! $blog->description!!}
                                    @endif </textarea>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btnbox55">
                    <button type="submit" class="btndflt58" tabindex="0">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector( '#description' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
</script>
@endsection