<?php

namespace App\Http\Livewire;

use App\Models\SubjectInfo as ModelsSubjectInfo;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SubjectInfo extends Component
{
    public function render()
    {
        $subjects = ModelsSubjectInfo::get();
        $data = compact('subjects');
        return view('livewire.subject-info', $data);
    }

    public function store(Request $request)
    {
        try
        {
            DB::transaction(function () use ($request){
                ModelsSubjectInfo::create([
                    'sub_name' => $request->subname,
                    'sub_gradelvl' => $request->subgradelvl,
                    'sub_strand' => $request->substrand,
                    'sub_section' => $request->subsection,
                    'sub_day' => $request->subday,
                    'sub_timestart' => date('Y-m-d h:i:s', strtotime($request->subtimestart)),
                    'sub_timeend' => date('Y-m-d h:i:s', strtotime($request->subtimeend))
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
        $subject = ModelsSubjectInfo::where('id', $id)->first();
        $subject->delete();

        session()->flash('message', 'Faculty Load has been deleted successfully');
    }
}
