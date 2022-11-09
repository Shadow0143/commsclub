@extends('layouts.frontend.app')

@section('title')
<title>Home</title>
@endsection


@section('css')
<style>
    .add-button {
        background-color: #021779d9;
        border-radius: 123px;
        color: white;
        height: 65px;
    }
</style>
@endsection

@section('content')
<section class="banner_sec55">
    @guest
    @else
    @if(Auth::user()->role=='0')
    <button class="add-button" id="bannerModalbtn"> + </button>
    @endif
    @endguest

    <div class="banner_slider">
        @foreach ($banner as $key=>$val)
        <div class="bannerinfo" id="bannerinfo{{$val->id}}">
            <div class="container">
                <h2>{{$val->title}}</h2>
                <h1>
                    {{$val->sub_title}}
                </h1>
                <p>{!! $val->details !!}</p>
                @guest
                @else
                @if(Auth::user()->role=='0')
                <a href="javaScript:void(0);" title="Edit" class="edit-banner" data-id="{{$val->id}}">Edit</a>
                <a href="javaScript:void(0);" title="Delete" class="delete_banner" data-id="{{$val->id}}">Delete</a>
                @endif
                @endguest

                <div class="btnbox55">
                    <a href="javaScript:void(0);" class="btndflt58">Join Commsclub</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


<section class="aboutus55">
    <div class="container">
        <div class="aboutuscont45">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="aboutleft55">
                        <h2>

                            WE CREATE MASS <br> PUBLIC'S EYE <span>ATTENTION</span>
                        </h2>
                        <a href="javaScript:void(0);" class="aboutlink5">who we are</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="aboutright55">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam maximus in urna at
                            lobortis. Suspendisse quis mauris maxim
                        </p>

                        <ul class="knowus45">
                            <li>
                                <strong>250+</strong>
                                <span>Screens Place</span>
                            </li>
                            <li>
                                <strong>78K</strong>
                                <span>Peoples Reached</span>
                            </li>
                            <li>
                                <strong>49+</strong>
                                <span>Country Cover</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="servcont paddy">
            <h2 class="title44">WHAT WE DO</h2>
            <h3 class="maintitle44">OUR SERVICES
                @guest
                @else
                @if(Auth::user()->role=='0')
                <button class="add-button" id="servicesModalbtn"> + </button>
                @endif
                @endguest
            </h3>
            <div class="servrow">
                <div class="row">
                    @foreach ($services as $key2=>$val2)
                    <div class="col-lg-4 col-md-4 col-sm-6" id="service{{$val2->id}}">
                        <div class="servbox11">
                            <figure><img src="{{asset('services')}}/{{$val2->image}}" alt="{{$val2->image}}"></figure>
                            <div class="servinfo66">
                                <div class="ser5icon">
                                    @guest
                                    @else
                                    @if(Auth::user()->role=='0')
                                    <a href="javaScript:void(0);" title="Edit" class="edit-services"
                                        data-id="{{$val2->id}}">Edit</a>
                                    <a href="javaScript:void(0);" title="Delete" class="delete_services"
                                        data-id="{{$val2->id}}">Delete</a>

                                    @endif
                                    @endguest
                                    <img src="{{asset('assets/images/servicon55.png')}}" class="serv icon"
                                        alt="small-logos">
                                </div>
                                <h4>{{$val2->title}} </h4>
                                <span>{{$val2->sub_title}}</span>
                                <a href="javaScript:void(0);" class="knowmr">Know more</a>
                                <div class="btnbox55">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="brandsec45">
    <div class="brandleft558">


        <h2>
            @guest
            @else
            @if(Auth::user()->role=='0')
            <button class="add-button" id="companyLogoModalbtn"> + </button>
            @endif
            @endguest
            TOP MEDIA <br> OUTLETS, <br> AGENCIES, AND <br> BRANDS
        </h2>
    </div>
    <div class="brandright66">
        <ul>
            @foreach ($companyLogos as $key3=>$val3)
            <li id="companylogo{{$val3->id}}">
                @guest
                @else
                @if(Auth::user()->role=='0')
                <a href="javaScript:void(0);" title="Delete" class="delete_companylogo" data-id="{{$val3->id}}">X</a>
                @endif
                @endguest
                <img src="{{asset('companylogos')}}/{{$val3->image}}" alt="{{$val3->image}}">
            </li>
            @endforeach


        </ul>
    </div>
</section>


<section class="testimon_sec55 paddy">
    <div class="container">
        <div class="testm_cont">
            @guest
            @else
            @if(Auth::user()->role=='0')
            <button class="add-button" id="testimonialModalbtn"> + </button>
            @endif
            @endguest

            <div class="quote45"><img src="{{asset('assets/images/quoteimg45.png')}}" alt="quote"></div>

            <div class="testmholer45">
                <ul class="testimonial45">
                    @foreach ($testimonials as $key4=>$val4)
                    <li id="testimonial{{$val4->id}}">
                        <div class="testbox568">
                            @guest
                            @else
                            @if(Auth::user()->role=='0')
                            <a href="javaScript:void(0);" title="Edit" class="edit-testimonial"
                                data-id="{{$val4->id}}">Edit</a>
                            <a href="javaScript:void(0);" title="Delete" class="delete_testimonial"
                                data-id="{{$val4->id}}">Delete</a>
                            @endif
                            @endguest

                            <p style="word-wrap: break-word;">
                                {!! $val4->messages !!}
                            </p>
                            <div class="prof78">
                                <img src="{{asset('testimonials')}}/{{$val4->image}}" alt="{{$val4->image}}">
                                <div class="profdt98">
                                    <h3>{{$val4->name}}</h3>
                                    <span>{{$val4->designation}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>


<section class="paddy strysection">
    <h2>
        Build Relationships for better <span>stories</span>
    </h2>
    <div class="storysec45">
        <div class="storyleft15">
            <img src="{{asset('assets/images/storibg.jpg')}}" alt="storbig">
        </div>
        <div class="storyright15">
            <h3>
                It helps storytellers diversify their sources, experts, guests, and speakers.
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec diam vel nisi facilisis posuere. Ut
                ante neque, pellentesque at congue quis, blandit dapibus neque. Sed lobortis dui vel varius euismod.
                Aliquam at blandit orci. Nulla facilisi. Nam
                Vestibulum pretium justo quis egestas egestas.
            </p>
            <h3>
                Check out our <span>expert</span> database to connect <span>today</span>
            </h3>
            <div class="btnbox55">
                <a href="javaScript:void(0);" class="btndflt58">EXPLORE MORE</a>
            </div>
        </div>
    </div>
</section>


<section class="datasec45 paddy">
    <div class="datacont">
        <div class="dataleft45">
            <h2>EXPERT DATABASE</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec diam vel nisi facilisis posuere. Ut
                ante neque, pellentesque at congue quis, blandit dapibus neque. Sed lobortis dui vel varius euismod.
                Aliquam at blandit orci. Nulla facilisi.
            </p>

            <ul class="datalist55">
                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            </ul>

        </div>
        <div class="dataright45">
            <img src="{{asset('assets/images/dataimg44.jpg')}}" alt="dataimg">
        </div>
    </div>
</section>


<section class="contact_sec55 paddy">
    <h2 class="maintitle44">HAVE ANY CONFUSTION?</h2>
    <span>Contact us to see how we can get you noticed</span>
    <div class="btnbox55">
        <a href="javaScript:void(0);" class="btndflt58">Contact Us</a>
    </div>
</section>


<section class="blogsec45 paddy">
    <div class="container">
        <h2 class="title44">WHATS GOING ON

            @guest
            @else
            @if(Auth::user()->role=='0')
            <button class="add-button" id="newsModalbtn"> + </button>
            @endif
            @endguest

        </h2>
        <h3 class="maintitle44">LATEST NEWS
        </h3>
        <div class="row">
            @foreach ($news as $key5=>$val5)
            <div class="col-lg-4 col-md-4 col-sm-6" id="news{{$val5->id}}">
                <div class="blog_box"
                    style="background: url({{asset('news')}}/{{$val5->image}}) no-repeat 0 0; background-size:cover">
                    @guest
                    @else
                    @if(Auth::user()->role=='0')
                    <a href="javaScript:void(0);" title="Edit" class="edit-news" data-id="{{$val5->id}}">Edit</a>
                    <a href="javaScript:void(0);" title="Delete" class="delete_news" data-id="{{$val5->id}}">Delete</a>
                    @endif
                    @endguest
                    <div class="date45">

                        <strong>{{date('d',strtotime($val5->created_at))}}</strong>
                        <span>{{date('M',strtotime($val5->created_at))}}</span>
                    </div>
                    <div class="ins"><i class="fa fa-bookmark-o"></i>{{$val5->topic}}</div>
                    <h2>
                        {{$val5->title}}
                    </h2>
                    <a href="javaScript:void(0);" class="rdmr456">Read More</a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<!---------------------- Modals -------------------->

<div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD BANNER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('postBanner')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="hidden" name="id" id="banner_id" value="">
                        <input type="text" name="title" id="banner_title" class="form-control" placeholder="Title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" name="sub_title" id="banner_sub_title" class="form-control"
                            placeholder="Sub Title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="banner_description" cols="30" rows="5" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('postServices')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="hidden" name="id" id="service_id" value="">
                        <input type="file" name="image" id="service_image" class="form-control" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="service_title" class="form-control" placeholder="Title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" name="sub_title" id="service_sub_title" class="form-control"
                            placeholder="Sub Title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="service_description" cols="30" rows="5" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="companyLogoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Company Logo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('mediaOutlet')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image">Company Logo</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Image" required
                            accept=".jpg,.JPG,.png,.PNG,.JPEG,.jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('testimonial')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image">Auther Image</label>
                        <input type="hidden" name="id" id="testimonial_id" value="">

                        <input type="file" name="image" id="testimonial_image" class="form-control" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="testimonial_name" class="form-control" placeholder="Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" id="testimonial_designation" class="form-control"
                            placeholder="Designation" required>
                    </div>
                    <div class="form-group">
                        <label for="messages">Messages</label>
                        <textarea name="messages" id="testimonial_messages" cols="30" rows="5" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('news')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image">News Image</label>
                        <input type="text" name="id" id="news_id" value="">
                        <input type="file" name="image" id="news_image" class="form-control" placeholder="Image"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" name="topic" id="news_topic" class="form-control" placeholder="Topic"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="news_title" class="form-control" placeholder=" Title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="news_description" cols="30" rows="5" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
{{------------------------------- Add section ------------------------------------}}
<script>
    $('#bannerModalbtn').on('click',function(){
        $('#banner_title').val('');
        $('#banner_sub_title').val('');
        $('#banner_description').val('');
        $('#bannerModal').modal('show');
    });
    $('#servicesModalbtn').on('click',function(){
        $('#service_image').val('');
        $('#service_image').attr('required',true);
        $('#service_title').val('');
        $('#service_sub_title').val('');
        $('#service_description').val('');
        $('#servicesModal').modal('show');
    });
    $('#companyLogoModalbtn').on('click',function(){
        $('#companyLogoModal').modal('show');
    });
    $('#testimonialModalbtn').on('click',function(){
        $('#testimonial_image').val('');
        $('#testimonial_image').attr('required',true);
        $('#testimonial_name').val('');
        $('#testimonial_designation').val('');
        $('#testimonial_messages').val('');
        $('#testimonialModal').modal('show');
    });
    $('#newsModalbtn').on('click',function(){
        $('#news_image').val('');
        $('#news_image').attr('required',true);
        $('#news_topic').val('');
        $('#news_title').val('');
        $('#news_description').val('');
        $('#newsModal').modal('show');
    });
</script>
{{------------------------------- Edit section ------------------------------------}}

<script>
    $('.edit-banner').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"{{route('editBanner')}}",
            type:'GET',
            data:{
                id:id
            },
            success:function(data){
                $('#banner_id').val(data.id);
                $('#banner_title').val(data.title);
                $('#banner_sub_title').val(data.sub_title);
                $('#banner_description').html(data.details);
                $('#bannerModal').modal('show');
            },
        });
    });

    $('.edit-services').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"{{route('editService')}}",
            type:'GET',
            data:{
                id:id
            },
            success:function(data){
                $('#service_id').val(data.id);
                $('#service_image').attr('required',false);
                $('#service_title').val(data.title);
                $('#service_sub_title').val(data.sub_title);
                $('#service_description').html(data.description);
                $('#servicesModal').modal('show');
            },
        });
    });

    $('.edit-testimonial').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"{{route('editTestimonial')}}",
            type:'GET',
            data:{
                id:id
            },
            success:function(data){
                $('#testimonial_id').val(data.id);
                $('#testimonial_image').attr('required',false);
                $('#testimonial_name').val(data.name);
                $('#testimonial_designation').val(data.designation);
                $('#testimonial_messages').html(data.messages);
                $('#testimonialModal').modal('show');
            },
        });
    });


    $('.edit-news').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"{{route('editNews')}}",
            type:'GET',
            data:{
                id:id
            },
            success:function(data){
                $('#news_id').val(data.id);
                $('#news_image').attr('required',false);
                $('#news_topic').val(data.topic);
                $('#news_title').val(data.title);
                $('#news_description').html(data.description);
                $('#newsModal').modal('show');
            },
        });
    });
</script>
{{------------------------------- Delete section ------------------------------------}}
<script>
    $(document).on('click', '.delete_banner', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this banner!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteBanner')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#bannerinfo'+id).hide();
                        window.location.reload();
                    }
                });
            }
        });
    });


    $(document).on('click', '.delete_services', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      swal({
          title: 'Are you sure?',
          text: "You won't delete this service!",
          icon: 'warning',
          buttons: true,
          buttonsStyling: false,
          reverseButtons: true
      }).then((confirm) => {
          if (confirm) {
              $.ajax({
                  type: "GET",
                  url: "{{route('deleteService')}}",
                  data: { id: id },
                  success: function(data) {
                      $('#service'+id).hide();
                  }
              });
          }
     });
    });


    $(document).on('click', '.delete_companylogo', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this company logo!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteCompanyLogo')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#companylogo'+id).hide();
                    }
                });
            }
        });
    });


    $(document).on('click', '.delete_testimonial', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this testimonial !",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteTestimonial')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#testimonial'+id).hide();
                    }
                });
            }
        });
    });


    $(document).on('click', '.delete_news', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this news!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteNews')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#news'+id).hide();
                    }
                });
            }
        });
    });
</script>


@endsection