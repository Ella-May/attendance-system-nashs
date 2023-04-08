<?php

namespace App\Http\Livewire;

use Illuminate\Database\QueryException;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolPersonnel as SPersonnel;

class SchoolPersonnel extends Component
{
    public function render()
    {
        $personnels = SPersonnel::get();
        $data = compact('personnels');
        return view('livewire.school-personnel', $data);
    }

    public function store(Request $request)
    {
        try{
            DB::transaction(function () use ($request){
                SPersonnel::create([
                    'userID' => $request->userID,
                    'p_firstname' => $request->firstname,
                    'p_midname' => $request->midname,
                    'p_lastname' => $request->lastname,
                    'p_sex' => $request->sex,
                    'p_address' => $request->address,
                    'p_cnumber'=> $request->cnumber,
                    'p_position' => 'Faculty Member'
                ]);
            });
            return back()->with('success', 'School Personnel Information added successfully');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }
}
