<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest; 
use App\Http\Requests\editEventRequest; 
use App\Services\EventServices;

class EventController extends Controller
{
    protected $EventServices;

    public function __construct(EventServices $EventServices) 
    {
        $this->EventServices = $EventServices;
    }

    //Adding new event

    public function newEvent(StoreEventRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('uploads/event_feature_image');
        }
        
        // Store event
        $storeEvent = $this->EventServices->storeEvent($data);
        if ($storeEvent === true) {

            return redirect('/admin/dashboard/event')->with('success', 'New Event Added');
        }
    }
    
    //edit event

    public function eventEdit(editEventRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('uploads/event_feature_image');
        }
        
        // Store event
        $storeEvent = $this->EventServices->editEvent($data);
        if ($storeEvent === true) {

            return redirect('/admin/dashboard/event')->with('success', 'Event Edited');
        }
    }

    //Delete event
    
    public function deleteEvent($id)
    {
        // delete event
        $storeEvent = $this->EventServices->deleteEvent($id);
        if ($storeEvent === true) {

            return redirect('/admin/dashboard/event')->with('success', 'Event Deleted');
        }
    }

}
