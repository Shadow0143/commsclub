<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Events;
use RealRashid\SweetAlert\Facades\Alert;


class EventController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function createEvents()
    {
        return view('events.create_event');
    }

    public function postEvents(Request $request)
    {
        // dd($request->all());
        if (!empty($request->id)) {
            $event                              = Events::find($request->id);
            $event->first_name                          = $request->first_name;
            $event->last_name                           = $request->last_name;
            $event->email                               = $request->email;
            $event->phone_no                            = $request->phone_no;
            $event->start_date                          = date('Y-m-d', strtotime($request->start_date));
            $event->end_date                            = date('Y-m-d', strtotime($request->end_date));
            $event->start_time                          = $request->start_time;
            $event->end_time                            = $request->end_time;
            $event->no_of_people                        = $request->no_of_people;
            $event->address                             = $request->address;
            $event->address2                            = $request->address2;
            $event->city                                = $request->city;
            $event->state                               = $request->state;
            $event->pincode                             = $request->pincode;
            $event->event_subject                       = $request->event_subject;
            $event->description                         = $request->description;
            if (!empty($request->file('image'))) {
                $eventImage                             = $request->file('image');
                $Imagename                              = time() . '-eventImage' . '.' . $eventImage->getClientOriginalExtension();
                $result                                 = public_path('events');
                $eventImage->move($result, $Imagename);
                $event->image                           = $Imagename;
            }

            $event->save();
            toast('Event is updated', 'success');
        } else {
            $event                                      = new Events();
            $event->first_name                          = $request->first_name;
            $event->last_name                           = $request->last_name;
            $event->email                               = $request->email;
            $event->phone_no                            = $request->phone_no;
            $event->start_date                          = date('Y-m-d', strtotime($request->start_date));
            $event->end_date                            = date('Y-m-d', strtotime($request->end_date));
            $event->start_time                          = $request->start_time;
            $event->end_time                            = $request->end_time;
            $event->no_of_people                        = $request->no_of_people;
            $event->address                             = $request->address;
            $event->address2                            = $request->address2;
            $event->city                                = $request->city;
            $event->state                               = $request->state;
            $event->pincode                             = $request->pincode;
            $event->event_subject                       = $request->event_subject;
            $event->description                         = $request->description;
            if (!empty($request->file('image'))) {
                $eventImage                             = $request->file('image');
                $Imagename                              = time() . '-eventImage' . '.' . $eventImage->getClientOriginalExtension();
                $result                                 = public_path('events');
                $eventImage->move($result, $Imagename);
                $event->image                           = $Imagename;
            }

            $event->save();
            toast('Event is added', 'success');
        }

        return redirect()->route('events');
    }

    public function deleteEvents(Request $request)
    {
        $event                                          = Events::find($request->id);
        $event->delete();
        return 1;
    }

    public function editEvents($id)
    {
        $event                                          = Events::find($id);
        return view('events.create_event')->with('event', $event);
    }
}