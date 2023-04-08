<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class SchoolPersonnel extends Component
{
    public function render()
    {
        $schoolpersonnel = SchoolPersonnel::get();
        return view('livewire.school-personnel')->with('SchoolPersonnel', $schoolpersonnel);
    }
    /**
     * @return \Illuminate\Http\Request;
    */

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response;
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response;
     */
    public function store(Request $request)
    {
        //
    }
}
