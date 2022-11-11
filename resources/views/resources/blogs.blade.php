@extends('layouts.frontend.app')

@section('title')
<title>Blogs</title>
@endsection
@section('css')
<style>
    .eventAddBtn {
        height: 60px;
        width: 60px;
        border-radius: 50px;
        position: absolute;
        margin: 10px;
        background-color: #10104bc9;
        color: white;
        box-shadow: 0px 1px 30px blue
    }
</style>
@endsection

@section('content')
<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>Blog</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <span>Resources</span>
            </li>
            <li>
                <span>Blog</span>
            </li>
        </ul>
    </div>
</section>

@guest
@else
@if(Auth::user()->role=='0')
<a href="{{route('createBlogs')}}">
    <button class="eventAddBtn"> + </button>
</a>
@endif
@endguest

<section class="blog_section456 paddy">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="bloglt45" id="searchresult">
                    @foreach ($blogs as $key=>$val)
                    <div class="blog_box565" id="blog{{$val->id}}">
                        @guest
                        @else
                        @if(Auth::user()->role=='0')
                        <a href="{{route('editBlogs',['id'=>$val->id])}}" title="Edit"><i class='fa fa-edit'></i></a>
                        <a href="javaScript:void(0);" title="Delete" class="delete_blogs" data-id="{{$val->id}}"><i
                                class='fa fa-trash'></i></a>
                        @endif
                        @endguest
                        <figure><img src="{{asset('blogs')}}/{{$val->image}}" width="810px"></figure>
                        <div class="bloginfo899">
                            <ul class="blgtop45">
                                <li class="active"><i class="fa fa-user"></i> {{$val->authname}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('M d, Y',strtotime($val->created_at))}}</li>
                                <li><i class="fa fa-tag" aria-hidden="true"></i> {{$val->tags}}</li>
                                <li><i class="fa fa-bookmark"></i> {{$val->categories}}</li>
                            </ul>

                            <h2>{{$val->title}}</h2>
                            <p>
                                {!! $val->description !!}
                            </p>

                            <a href="#" class="blgrdmr45">Read More <img
                                    src="{{asset('assets/images/blog/arrow555.png')}}"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blog_rt56">
                    <div class="blgsrbox78">
                        <div class="blogsrch88">
                            <input type="text" placeholder="search" id="searchbox">
                            <button class="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="post_sec456">
                        <h3>RECENT POSTS</h3>
                        <ul>
                            @foreach ($blogs as $key=>$val)
                            <li>
                                <a href="#">{{$val->authname}}: {{$val->title}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="post_sec456 arch">
                        <h3>Tags</h3>
                        <ul class="tags45">
                            <li> <a href="javaScript:void(0);" class="searchtag" data-type="tag"
                                    data-value="press_conference"> <span> Press Conference </span> </a> </li>
                            <li> <a href="javaScript:void(0);" class="searchtag" data-type="tag"
                                    data-value="media_market"> <span>Media & Marketing</span> </a></li>
                            <li> <a href="javaScript:void(0);" class="searchtag" data-type="tag" data-value="other">
                                    <span>Others</span> </a> </li>
                        </ul>
                    </div>

                    <div class="post_sec456 arch">
                        <h3>ARCHIVES</h3>
                        <ul>
                            @for ($m=12; $m>=6; $m--) <li>
                                <a href="javaScript:void(0);" class="serachbydate"
                                    data-value="{{date('Y-m', mktime(0,0,0,$m, 1, date('Y')))}} "> {{date('F Y',
                                    mktime(0,0,0,$m, 1, date('Y')))}} </a>
                            </li>
                            @endfor

                        </ul>
                    </div>
                    <div class="post_sec456 arch">
                        <h3>CATEGORIES</h3>
                        <ul>
                            <li> <a href="javaScript:void(0);" class="searchcat" data-type="cat"
                                    data-value="press_conference"> Press
                                    Conference </a> </li>
                            <li> <a href="javaScript:void(0);" class="searchcat" data-type="cat"
                                    data-value="media_market"> Media
                                    & Marketing </a> </li>
                        </ul>
                    </div>

                    <div class="post_sec456">
                        <h3>RECENT COMMENTS</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Tech Gift Ideas to Tackle Your
                                    Holiday Shopping
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<!------------------------------------------- Delete section ----------------------------------->

<script>
    $(document).on('click', '.delete_blogs', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this blog!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteBlogs')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#blog'+id).hide();
                    }
                });
            }
        });
    });
</script>

<!------------------------------------------- Search section ----------------------------------->
<script>
    $('.search').on('click',function(){
        var keyword = $('#searchbox').val();
        var searchtype = 'textsearch';
        $.ajax({
        url:"{{route('searchBlogs')}}",
        type:'GET',
        data:{
                keyword:keyword,
                searchtype:searchtype,
        },
        success:function(data){
            if(data !=''){
                $('#searchresult').html(data);
            }else{
                $('#searchresult').html('<div class="text-center "><p class="text-danger"> No data found.</p></div>');
            }
        }
        });
    });

    $('.searchcat').on('click',function(){
        var value = $(this).data('value');
        var searchtype = $(this).data('type');
        $.ajax({
        url:"{{route('searchBlogs')}}",
        type:'GET',
        data:{
                value:value,
                searchtype:searchtype,
        },
        success:function(data){
            if(data !=''){
                $('#searchresult').html(data);
            }else{
                $('#searchresult').html('<div class="text-center "><p class="text-danger"> No data found.</p></div>');
            }
        }
        });
    });

    $('.searchtag').on('click',function(){
        var value = $(this).data('value');
        var searchtype = $(this).data('type');
        $.ajax({
        url:"{{route('searchBlogs')}}",
        type:'GET',
        data:{
                value:value,
                searchtype:searchtype,
        },
        success:function(data){
            if(data !=''){
                $('#searchresult').html(data);
            }else{
                $('#searchresult').html('<div class="text-center "><p class="text-danger"> No data found.</p></div>');
            }
        }
        });
    });

    $('.serachbydate').on('click',function(){
        var value = $(this).data('value');
        var searchtype = 'date';
        $.ajax({
        url:"{{route('searchBlogs')}}",
        type:'GET',
        data:{
                value:value,
                searchtype:searchtype,
        },
        success:function(data){
            if(data !=''){
                $('#searchresult').html(data);
            }else{
                $('#searchresult').html('<div class="text-center "><p class="text-danger"> No data found.</p></div>');
            }
        }
        });
    });
</script>
@endsection