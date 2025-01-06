<?php

namespace App\Services;

use App\Models\Event;
use App\Models\Preference;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class EventServices {
    
    // Adding New Event
    public function storeEvent($data) {
        $event = new Event;
        $event->location = $data['location'];
        $event->age_group = $data['age_group'];
        $event->featured_image = $data['image'];
        $event->title = $data['title'];
        $event->gst_percentage = $data['gst_percentage'];
        $event->description = $data['description'];
        $event->event_date = $data['event_date'];
        $event->event_start_time = $data['event_start_time'];
        $event->event_duration = $data['event_duration'];
        $event->ticket_price = $data['ticket_price'];

        return $event->save();
    }

    // Edit Event
    public function editEvent($data) {
        $event = Event::where('id', $data['id'])->first();
        $event->location = $data['location'];
        $event->age_group = $data['age_group'];
        if(!empty($data['image']))
        {
            $event->featured_image = $data['image'];
        }
        $event->title = $data['title'];
        $event->gst_percentage = $data['gst_percentage'];
        $event->description = $data['description'];
        $event->event_date = $data['event_date'];
        $event->event_start_time = $data['event_start_time'];
        $event->event_duration = $data['event_duration'];
        $event->ticket_price = $data['ticket_price'];

        return $event->save();
    }

    //Deleting event

    public function deleteEvent($id)
    {
        $data = Event::where('id', $id)->first();
        return $data->delete();
    }
}
