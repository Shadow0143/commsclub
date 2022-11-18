@extends('layouts.frontend.app')

@section('title')
<title>Events Details</title>
@endsection
@section('css')

@endsection

@section('content')
<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>Event Details</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <a href="{{route('events')}}">Event</a>
            </li>
            <li>
                <span>Event Details</span>
            </li>
        </ul>
    </div>
</section>


<section class="event_section paddy">
    <div class="container">
        <div class=" evehndlr45">
            <div class="event_block45 evedetls8898">
                <figure><img src="{{asset('events')}}/{{$event->image}}" alt="event_img"></figure>
                <div class="eveinfo45">
                    <div class="datebox45">
                        <span class="day45">{{date('D',strtotime($event->created_at))}}</span>
                        <span class="date55">{{date('m',strtotime($event->created_at))}}</span>
                    </div>
                    <div class="eve_right458">
                        <h3> {{ucfirst($event->event_subject)}}</h3>
                        <ul class="eve_tlist88">
                            <li><label>Event Date:</label><span>{{date('M d, Y',strtotime($event->start_date))}}
                                </span>-
                                <span> {{date('M d, Y',strtotime($event->end_date))}}</span>
                            </li>
                            <li><label>Event Time:</label>{{date('H:i A',strtotime($event->start_time))}} - {{date('H:i
                                A',strtotime($event->end_time))}}</li>
                            <li><label>Address:</label>{!! $event->address !!} ,{{$event->city}},{{$event->state}} :
                                {{$event->pincode}}
                            </li>
                            <li>
                                <label>Organiser</label>
                                <span>{{$event->first_name}} {{$event->last_name}} </span>
                            </li>
                            <li>
                                <label>Organiser email</label>
                                <span>{{$event->email}}</span>
                            </li>
                            <li>
                                <label>Organiser Phone number</label>
                                <span>{{$event->phone_no}}</span>
                            </li>
                            <li>
                                <label>Number of people</label>
                                <span>{{$event->no_of_people}}</span>
                            </li>
                            <li>
                                <label>Event description </label>
                                {!! $event->description !!}
                            </li>
                            @if(!empty($event->meeting_url))
                            <li>
                                <label>Meeting link</label>
                                <a href="{{$event->meeting_url}}" target="_blank">{{$event->meeting_url}}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

@section('js')


@endsection