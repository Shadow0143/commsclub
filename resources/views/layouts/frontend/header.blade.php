<header class="header_outer">


    <div class="hdtopouter">
        <div class="container">
            <div class="headertop55">
                <div class="hdtpleft25">

                    <ul class="tpsocial56">
                        <li>
                            <a href="#" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>


                    <div class="msg58">
                        <a href="#"><i class="fa fa-envelope"></i> commsclub@company.com</a>
                    </div>

                </div>


                <div class="hdtprt25">
                    <ul>
                        <li><a href="#">Company News</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li>
                            @guest
                            @if (Route::has('login'))
                            <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
                            @endif
                            @else

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <i class="fa fa-user"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            @endguest
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="hdbtmouter56">
        <div class="container">
            <div class="headerbtm55">
                <div class="logo">
                    <a href="{{route('welcome')}}"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                </div>

                <div class="menubox desk">
                    <ul>
                        <li class=" @if(Route::current()->getName()=='welcome') active @endif"><a
                                href="{{route('welcome')}}">Home </a></li>
                        <li><a href="#">Resources</a></li>
                        <li class=" @if(Route::current()->getName()=='events') active @endif"><a
                                href="{{route('events')}}">Events</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Expert Database</a></li>
                        <li><a href="#">Join Commsclub</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>


    <div class="toggle458">
        <div class="togglemenu45" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars"></i> <span></span>
        </div>
    </div>


    <!-- Mobile menu -->
    <!-- Modal -->
    <div class="modal left fade mobilemenu56" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <a href="#" class="logo"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body mobile45">
                    <div class="menubox">
                        <ul>
                            <li class=" @if(Route::current()->getName()=='welcome') active @endif"><a
                                    href="{{route('welcome')}}">Home</a></li>
                            <li><a href="#">Resources</a></li>
                            <li class=" @if(Route::current()->getName()=='events') active @endif"><a
                                    href="{{route('events')}}">Events</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Expert Database</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Join Commsclub</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- modal -->
    <!-- Mobile menu -->


    <!-- Modal -->

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
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control"
                                placeholder="Sub Title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
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
                            <input type="file" name="image" id="image" class="form-control" placeholder="Image"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control"
                                placeholder="Sub Title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
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
                            <input type="file" name="image" id="image" class="form-control" placeholder="Image"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" name="designation" id="designation" class="form-control"
                                placeholder="Designation" required>
                        </div>
                        <div class="form-group">
                            <label for="messages">Messages</label>
                            <textarea name="messages" id="messages" cols="30" rows="5" class="form-control"
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
                            <input type="file" name="image" id="image" class="form-control" placeholder="Image"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic</label>
                            <input type="text" name="topic" id="topic" class="form-control" placeholder="Topic"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder=" Title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
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

</header>