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
            <li><i class="fa fa-bookmark"></i> {{$val->tags}}</li>
            <li><i class="fa fa-bookmark"></i> {{$val->categories}}</li>
        </ul>

        <h2>{{$val->title}}</h2>
        <p>
            {!! $val->description !!}
        </p>

        <a href="{{route('blogDetails',['id'=>$val->id])}}" class="blgrdmr45">Read More <img
                src="{{asset('assets/images/blog/arrow555.png')}}" alt="read-more"></a>
    </div>
</div>
@endforeach