<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class AttendanceReport extends Component
{
    public function render()
    {
        return view('livewire.attendance-report');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
