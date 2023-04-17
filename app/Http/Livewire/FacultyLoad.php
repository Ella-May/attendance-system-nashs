<?php

namespace App\Http\Livewire;

use Illuminate\Database\QueryException;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\FacultyLoad as FLoad;
use Illuminate\Http\Request;


class FacultyLoad extends Component
{
    public function render()
    {
        $subjects = FLoad::get();
        $data = compact('subjects');
        return view('livewire.faculty-load', $data);
    }

    public function store(Request $request)
    {
        try
        {
            DB::transaction(function () use ($request){
                FLoad::create([
                    'sub_name' => $request->subname,
                    'sub_gradelvl' => $request->subgradelvl,
                    'sub_strand' => $request->substrand,
                    'sub_section' => $request->subsection,
                    'sub_day' => $request->subday,
                    'sub_timestart' => $request->subtimestart,
                    'sub_timeend' => $request->subtimeend
                ]);
            });
            return back()->with('success', 'Faculty Load added successfully');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $subject = Fload::where('id', $id)->first();
        $subject = delete();

        session()->flash('message', 'Faculty Load has been deleted successfully');
    }
}
