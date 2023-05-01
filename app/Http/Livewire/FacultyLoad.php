<?php

namespace App\Http\Livewire;

use App\Models\FacultyLoad as ModelsFacultyLoad;
use App\Models\SchoolPersonnel;
use App\Models\SubjectInfo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FacultyLoad extends Component
{
    public function render()
    {
        $facultyMembers = SchoolPersonnel::where('p_position', 'Faculty Member')->get();
        $subjectInfos = SubjectInfo::get();

        $facultyLoads = ModelsFacultyLoad::get();

        $data = compact('facultyMembers', 'subjectInfos', 'facultyLoads');

        return view('livewire.faculty-load', $data);
    }

    public function store(Request $request)
    {
        try
        {
            $schoolPersonnel = SchoolPersonnel::where('id', $request->member)->first();
            $addSubject = DB::transaction(function() use ($request) {
                if(count($request->subject) > 0)
                {
                    foreach($request->subject as $subject)
                    {
                        ModelsFacultyLoad::create([
                            'school_perID' => $request->member,
                            'subject_infoID' => intval($subject),
                        ]);
                    }
                };

                return true;
            });

            if($addSubject)
            {
                return back()->with('success', "Subject for $schoolPersonnel->p_firstname $schoolPersonnel->p_lastname has been added.");
            }

        } catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }
}
