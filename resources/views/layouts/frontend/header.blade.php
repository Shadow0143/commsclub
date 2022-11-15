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
                        <li class="@if(Route::current()->getName()=='blogs') active @endif"><a
                                href="{{route('blogs')}}">Resources</a></li>
                        <li class=" @if(Route::current()->getName()=='events') active @endif"><a
                                href="{{route('events')}}">Events</a></li>
                        <li class=" @if(Route::current()->getName()=='jobs') active @endif"><a
                                href="{{route('jobs')}}">Jobs</a></li>
                        <li><a href="#">Expert Database</a></li>
                        @guest
                        <li data-toggle="modal" data-target="#joinmodal"><a href="#">Join Commsclub</a></li>
                        @endguest
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
                            <li class="@if(Route::current()->getName()=='blog') active @endif"><a
                                    href="{{route('blogs')}}">Resources</a></li>
                            <li class=" @if(Route::current()->getName()=='events') active @endif"><a
                                    href="{{route('events')}}">Events</a></li>
                            <li class=" @if(Route::current()->getName()=='jobs') active @endif"><a
                                    href="{{route('jobs')}}">Jobs</a></li>
                            <li><a href="#">Expert Database</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Login</a></li>
                            @guest
                            <li data-toggle="modal" data-target="#joinmodal"><a href="#">Join Commsclub</a></li>
                            @endguest
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

    <!-- join pop up -->
    <div class="modal fade" id="joinmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered popcontainer" role="document">
            <div class="modal-content popups45">
                <div class="modal-header">
                    <div class="logo">
                        <a href="{{route('welcome')}}"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="pophead99">
                        <h2>JOIN COMMSCLUB</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam maximus in urna at
                            lobortis. Suspendisse quis mauris maxim.
                        </p>
                        <span>Lorem ipsum dolor sit amet</span>
                    </div>

                    <div class="popbody458">

                        <div class="fieldrow">
                            <div class="inputfield55">
                                <label>email id</label>
                                <input type="text" name="">
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                        <div class="fieldrow">
                            <div class="inputfield55">
                                <label>password</label>
                                <input type="password" name="">
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                        <div class="termcheck455">
                            <label class="checkcontainer78">
                                <input type="checkbox">I confirm that i’ve read and agree to Privacy Policy
                                <span class="checkmark"></span>


                            </label>
                        </div>

                        <div class="btnbox55">
                            <a href="#" class="btndflt58" tabindex="0">login</a>
                        </div>

                    </div>




                </div>

            </div>
        </div>
    </div>

    <!-- join pop up -->


</header>