<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventList extends Component
{
    public function render()
    {
        $events = Event::latest()->orderBy('id', 'desc')->paginate(10);
        return view('livewire.event-list',[
            'events' => $events
        ]);
    }
}
