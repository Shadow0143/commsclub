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
    <button class="add-button" data-toggle="modal" data-target="#bannerModal">
        +
    </button>
    @endif
    @endguest

    <div class="banner_slider">
        @foreach ($banner as $key=>$val)
        <div class="bannerinfo">
            <div class="container">
                <h2>{{$val->title}}</h2>
                <h1>
                    {{$val->sub_title}}
                </h1>
                <p>{!! $val->details !!}</p>
                <div class="btnbox55">
                    <a href="#" class="btndflt58">Join Commsclub</a>
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
                        <a href="#" class="aboutlink5">who we are</a>
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
                <button class="add-button" data-toggle="modal" data-target="#servicesModal">
                    +
                </button>
                @endif
                @endguest
            </h3>
            <div class="servrow">
                <div class="row">
                    @foreach ($services as $key2=>$val2)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="servbox11">
                            <figure><img src="{{asset('services')}}/{{$val2->image}}" alt="serimg"></figure>
                            <div class="servinfo66">
                                <div class="ser5icon"><img src="{{asset('assets/images/servicon55.png')}}"
                                        class="serv icon"></div>
                                <h4>{{$val2->title}} </h4>
                                <span>{{$val2->sub_title}}</span>
                                <a href="#" class="knowmr">Know more</a>
                                <div class="btnbox55">
                                    <a href="#" class="btndflt58">JOIN FREE</a>
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
            <button class="add-button" data-toggle="modal" data-target="#companyLogoModal">
                +
            </button>
            @endif
            @endguest
            TOP MEDIA <br> OUTLETS, <br> AGENCIES, AND <br> BRANDS
        </h2>
    </div>
    <div class="brandright66">
        <ul>
            @foreach ($companyLogos as $key3=>$val3)
            <li>
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
            <button class="add-button" data-toggle="modal" data-target="#testimonialModal">
                +
            </button>
            @endif
            @endguest

            <div class="quote45"><img src="{{asset('assets/images/quoteimg45.png')}}" alt="quote"></div>

            <div class="testmholer45">
                <ul class="testimonial45">
                    @foreach ($testimonials as $key4=>$val4)
                    <li>
                        <div class="testbox568">
                            <p style="word-wrap: break-word;">
                                {!! $val4->messages !!}
                            </p>
                            <div class="prof78">
                                <img src="{{asset('testimonials')}}/{{$val4->image}}" alt="client">
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
            <img src="{{asset('assets/images/storibg.jpg')}}" alt="">
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
                <a href="#" class="btndflt58">EXPLORE MORE</a>
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
        <a href="#" class="btndflt58">Contact Us</a>
    </div>
</section>


<section class="blogsec45 paddy">
    <div class="container">
        <h2 class="title44">WHATS GOING ON

            @guest
            @else
            @if(Auth::user()->role=='0')
            <button class="add-button" data-toggle="modal" data-target="#newsModal">
                +
            </button>
            @endif
            @endguest

        </h2>
        <h3 class="maintitle44">LATEST NEWS
        </h3>
        <div class="row">
            @foreach ($news as $key5=>$val5)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog_box"
                    style="background: url({{asset('news')}}/{{$val5->image}}) no-repeat 0 0; background-size:cover">
                    <div class="date45">
                        <strong>{{date('d',strtotime($val5->created_at))}}</strong>
                        <span>{{date('M',strtotime($val5->created_at))}}</span>
                    </div>
                    <div class="ins"><i class="fa fa-bookmark-o"></i>{{$val5->topic}}</div>
                    <h2>
                        {{$val5->title}}
                    </h2>
                    <a href="#" class="rdmr456">Read More</a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection

@section('js')

@endsection