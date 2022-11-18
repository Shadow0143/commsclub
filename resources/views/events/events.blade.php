@extends('layouts.frontend.app')

@section('title')
<title>Events</title>
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

    #event_img {
        width: 390px;
        height: 225px ! important;
    }
</style>
@endsection

@section('content')
<section class="banner_sec55 innerbanner456">

    <div class="container">
        <h1>Event on advertising and marketing</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <span>Advertising and marketing</span>
            </li>
        </ul>
    </div>
</section>
@guest
@else
@if(Auth::user()->role=='0')
<a href="{{route('createEvents')}}"> <button class="eventAddBtn"> + </button> </>
    @endif
    @endguest

    <section class="event_section paddy">
        <div class="container">
            <div class="row">
                @foreach ($event as $key=>$item)
                <div class="col-lg-4 col-md-4 col-sm-6 evehndlr45" id="event{{$item->id}}">
                    @guest
                    @else
                    @if(Auth::user()->role=='0')
                    <a href="{{route('editEvents',['id'=>$item->id])}}" title="Edit"><i class='fa fa-edit'></i></a>
                    <a href="javaScript:void(0);" title="Delete" class="delete_event" data-id="{{$item->id}}"><i
                            class='fa fa-trash'></i></a>
                    @endif
                    @endguest
                    <div class="event_block45">
                        <figure><img src="{{asset('events')}}/{{$item->image}}" alt="event_img" id="event_img">
                        </figure>
                        <div class="eveinfo45">
                            <div class="datebox45">
                                <span class="day45">{{date('D',strtotime($item->created_at))}}</span>
                                <span class="date55">{{date('m',strtotime($item->created_at))}}</span>
                            </div>
                            <div class="eve_right458">
                                <h3>
                                    <a href="{{route('eventDetails',['id'=>$item->id])}}">
                                        {{ucfirst($item->event_subject)}}
                                    </a>
                                </h3>
                                <ul class="eve_tlist88">
                                    <li><i class="fa fa-calendar"></i>{{date('M d, Y',strtotime($item->start_date))}} -
                                        {{date('M d, Y',strtotime($item->end_date))}}</li>
                                    <li><i class="fa fa-clock-o"></i> {{date('H:i A',strtotime($item->start_time))}} -
                                        {{date('H:i A',strtotime($item->end_time))}}</li>
                                    <li><i class="fa fa-map-marker"></i> {!! $item->address !!}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>

    @endsection

    @section('js')

    <script>
        $(document).on('click', '.delete_event', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this event!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteEvents')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#event'+id).hide();
                    }
                });
            }
        });
    });
    </script>
    @endsection