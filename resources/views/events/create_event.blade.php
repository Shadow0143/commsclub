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
</style>
@endsection

@section('content')
<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>event details</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('events')}}">Event</a>
            </li>
            <li>
                <span>Conference Registration</span>
            </li>
        </ul>
    </div>
</section>

<section class="eve_reg_sect456 paddy">
    <div class="container">
        <h2>Conference Registration</h2>
        <p>Please book for your conference by filling the form below, specify the expected number joining the
            conference.</p>
        <form action="{{route('postEvents')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="event_id" @if(!empty($event)) value="{{$event->id}}" @endif>

            <div class="eventformhld">
                <div class="evreg66">
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" required @if(!empty($event))
                                    value="{{$event->first_name}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" required @if(!empty($event))
                                    value="{{$event->last_name}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>

                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>email <span class="text-danger">*</span></label>
                                <input type="text" name="email" required @if(!empty($event)) value="{{$event->email}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>phone number <span class="text-danger">*</span></label>
                                <input type="text" name="phone_no" required @if(!empty($event))
                                    value="{{$event->phone_no}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event start date <span class="text-danger">*</span></label>
                                <i class="fa fa-calendar date456"></i>
                                <input data-date-format="yyyy-mm-dd" class="datepicker" name="start_date" required
                                    @if(!empty($event)) value="{{$event->start_date}}" @endif>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event end date<span class="text-danger">*</span></label>
                                <i class="fa fa-calendar date456"></i>
                                <input data-date-format="yyyy-mm-dd" class="datepicker" name="end_date" required
                                    @if(!empty($event)) value="{{$event->end_date}}" @endif>
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event start time <span class="text-danger">*</span></label>
                                <div class="time45">
                                    <input type="time" id="appt" name="start_time" min="09:00" max="18:00" required
                                        @if(!empty($event)) value="{{$event->start_time}}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event end time <span class="text-danger">*</span></label>
                                <div class="time45">
                                    <input type="time" id="appt" name="end_time" min="09:00" max="18:00" required
                                        @if(!empty($event)) value="{{$event->end_time}}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label> Number of people attending</label>
                                <div class="addminu">
                                    <a id="min">-</a>
                                    <input type="text" id="result" name="no_of_people" @if(!empty($event))
                                        value="{{$event->no_of_people}}" @endif>

                                    <a id="add">+</a>
                                </div>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="inputfield55">
                                <label> Event Image <span class="text-danger">*</span> </label>
                                <div class="inputfield55">
                                    <input type="file" id="image" name="image" @if(empty($event)) required @endif>
                                </div>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="evreg66">
                    <h3>Address</h3>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Street Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" required @if(!empty($event))
                                    value="{{$event->address}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Street Address Line 2</label>
                                <input type="text" name="address2" @if(!empty($event)) value="{{$event->address2}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>City <span class="text-danger">*</span></label>
                                <input type="text" name="city" reqired @if(!empty($event)) value="{{$event->city}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>State / Province <span class="text-danger">*</span></label>
                                <input type="text" name="state" required @if(!empty($event)) value="{{$event->state}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Postal / Zip Code <span class="text-danger">*</span></label>
                                <input type="text" name="pincode" required @if(!empty($event))
                                    value="{{$event->pincode}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="evreg66">
                    <h3>Event Details</h3>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event subject <span class="text-danger">*</span></label>
                                <textarea name="event_subject" required>  @if(!empty($event))
                                    {!!$event->event_subject !!} @endif </textarea>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>event Description</label>
                                <textarea name="description" id="description" rows="5">  @if(!empty($event)) {!! $event->description!!}
                                    @endif </textarea>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Event Meeting Link</label>
                                <input type="url" name="meeting_url" id="meeting_url" @if(!empty($event))
                                    value="{{ $event->meeting_url}}" @endif>

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


    $(document).ready(function() {
        var result =  $("#result").val();
        

        $("#add").click(function() {
            result++;

            if (result >= 10) {
                result = 10;
            }
            $("#result").val(result);
        });

        $("#min").click(function() {
            result--;

            if (result < 0) {
                result = 0;
            }

            $("#result").val(result);

        });


    });
</script>

<script type="text/javascript">
    $('.datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('.datepicker').datepicker("setDate", new Date());
</script>

<script type="text/javascript">
    $(function() {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
</script>

@endsection